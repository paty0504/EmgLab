<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
class ProjectController extends Controller
{
    //
    public function getDanhSach(){
        $project= Project::all();
        return view('admin.project.danhsach', ['project'=>$project]); 
    }

    public function getThem(){
      return view('admin.project.them');
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
       $project = new Project;
       $project->name = $request->Ten;
       $project->description = $request->MoTa;
      $project->highlight = $request->NoiBat;
       
       if($request->hasFile('Hinh')){
       
        $file = $request->file('Hinh');
        $duoi = $file->getClientOriginalExtension();
        if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg' ){
            return redirect('admin/project/them')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
        }
        $name = $file->getClientOriginalName();
        $Hinh = str_random(4)."_".$name; 
        //randomr ra 1 chuoi de ten hinh k bi trung
        while(file_exists("upload/project/".$Hinh)){
            $Hinh = str_random(4)."_".$name; 
        }
        
        $file->move("upload/project", $Hinh);
      
        

        $project->picture = $Hinh;
        
        //Luu file hinh moi
    }
    else{
            $project->picture = "";
    }
    $project->save();
    return redirect('admin/project/them')->with('thongbao','Them Thanh Cong');
    }
        

    public function getSua($id){
     $project = Project::find($id);
     return view('admin.project.sua',['project'=>$project]);
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
           $project = Project::find($id);
           $project->name = $request->Ten;
           $project->description = $request->MoTa;
           
           
           if($request->hasFile('Hinh')){
           
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg' ){
                return redirect('admin/project/them')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name; 
            //randomr ra 1 chuoi de ten hinh k bi trung
            while(file_exists("upload/project/".$Hinh)){
                $Hinh = str_random(4)."_".$name; 
            }
           
            $file->move("upload/project", $Hinh);
          
            
    
            $project->picture = $Hinh;
            
            //Luu file hinh moi
        }
       
        $project->save();
        return redirect('admin/project/sua/'.$id)->with('thongbao','Sua Thanh Cong');
    }
    public function getXoa($id){
        $project = Project::find($id);
        $project->delete();
        return redirect('admin/project/danhsach')->with('thongbao','Xoa Thanh Cong');
    }
} 
