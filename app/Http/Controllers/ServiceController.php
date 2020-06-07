<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;
class ServiceController extends Controller
{
    //
    public function getDanhSach(){
        $service= Service::all();
        return view('admin.service.danhsach', ['service'=>$service]); 
    }

    public function getThem(){
      return view('admin.service.them');
    }

    public function postThem(Request $request){
       $this->validate($request,[
        'Ten' => 'required',
        'NoiDung' => 'required',
       ],
       [
        'Ten.required' => 'Bạn chưa nhập tên',
        'NoiDung.required' => 'Bạn chưa nhập nội dung'
       ]);
       $service = new Service;
       $service->name = $request->Ten;
       $service->description = $request->NoiDung;
      
       
       if($request->hasFile('Hinh')){
       
        $file = $request->file('Hinh');
        $duoi = $file->getClientOriginalExtension();
        if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg' ){
            return redirect('admin/service/them')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
        }
        $name = $file->getClientOriginalName();
        $Hinh = str_random(4)."_".$name; 
        //randomr ra 1 chuoi de ten hinh k bi trung
        while(file_exists("upload/service/".$Hinh)){
            $Hinh = str_random(4)."_".$name; 
        }
        
        $file->move("upload/service", $Hinh);
      
        

        $service->picture = $Hinh;
        
        //Luu file hinh moi
    }
    else{
            $service->picture = "";
    }
    $service->save();
    return redirect('admin/service/them')->with('thongbao','Them Thanh Cong');
    }
        

    public function getSua($id){
     $service = service::find($id);
     return view('admin.service.sua',['service'=>$service]);
    }

    public function postSua(Request $request, $id){
        $this->validate($request,[
            'Ten' => 'required',
            'NoiDung' => 'required',
           ],
           [
            'Ten.required' => 'Bạn chưa nhập tên',
            'NoiDung.required' => 'Bạn chưa nhập nội dung'
           ]);
           $service = Service::find($id);
           $service->name = $request->Ten;
           $service->description = $request->NoiDung;
           
           
           if($request->hasFile('Hinh')){
           
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg' ){
                return redirect('admin/service/them')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name; 
            //randomr ra 1 chuoi de ten hinh k bi trung
            while(file_exists("upload/service/".$Hinh)){
                $Hinh = str_random(4)."_".$name; 
            }
           
            $file->move("upload/service", $Hinh);
          
            
    
            $service->picture = $Hinh;
            
            //Luu file hinh moi
        }
       
        $service->save();
        return redirect('admin/service/sua/'.$id)->with('thongbao','Sua Thanh Cong');
    }
    public function getXoa($id){
        $service = Service::find($id);
        $service->delete();
        return redirect('admin/service/danhsach')->with('thongbao','Xoa Thanh Cong');
    }
} 
