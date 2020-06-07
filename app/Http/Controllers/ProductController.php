<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
class ProductController extends Controller
{
    //
    public function getDanhSach(){
        $product= Product::all();
        return view('admin.product.danhsach', ['product'=>$product]); 
    }

    public function getThem(){
      return view('admin.product.them');
    }

    public function postThem(Request $request){
       $this->validate($request,[
        'Ten' => 'required',
        'MoTa' => 'required',
       ],
       [
        'Ten.required' => 'Bạn chưa nhập tên',
        'MoTa.required' => 'Bạn chưa nhập nội dung'
       ]);
       $product = new Product;
       $product->name = $request->Ten;
       $product->description = $request->MoTa;
      $product->highlight = $request->NoiBat;
       
       if($request->hasFile('Hinh')){
       
        $file = $request->file('Hinh');
        $duoi = $file->getClientOriginalExtension();
        if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg' ){
            return redirect('admin/product/them')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
        }
        $name = $file->getClientOriginalName();
        $Hinh = str_random(4)."_".$name; 
        //randomr ra 1 chuoi de ten hinh k bi trung
        while(file_exists("upload/product/".$Hinh)){
            $Hinh = str_random(4)."_".$name; 
        }
        
        $file->move("upload/product", $Hinh);
      
        

        $product->picture = $Hinh;
        
        //Luu file hinh moi
    }
    else{
            $product->picture = "";
    }
    $product->save();
    return redirect('admin/product/them')->with('thongbao','Them Thanh Cong');
    }
        

    public function getSua($id){
     $product = Product::find($id);
     return view('admin.product.sua',['product'=>$product]);
    }

    public function postSua(Request $request, $id){
        $this->validate($request,[
            'Ten' => 'required',
            'MoTa' => 'required',
           ],
           [
            'Ten.required' => 'Bạn chưa nhập tên',
            'MoTa.required' => 'Bạn chưa nhập nội dung'
           ]);
           $product = Product::find($id);
           $product->name = $request->Ten;
           $product->description = $request->MoTa;
           
           
           if($request->hasFile('Hinh')){
           
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg' ){
                return redirect('admin/product/them')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name; 
            //randomr ra 1 chuoi de ten hinh k bi trung
            while(file_exists("upload/product/".$Hinh)){
                $Hinh = str_random(4)."_".$name; 
            }
           
            $file->move("upload/product", $Hinh);
          
            
    
            $product->picture = $Hinh;
            
            //Luu file hinh moi
        }
       
        $product->save();
        return redirect('admin/product/sua/'.$id)->with('thongbao','Sua Thanh Cong');
    }
    public function getXoa($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product/danhsach')->with('thongbao','Xoa Thanh Cong');
    }
} 
