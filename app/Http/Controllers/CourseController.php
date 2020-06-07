<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;
class CourseController extends Controller
{
    //
    public function getDanhSach(){
        $course= Course::all();
        return view('admin.course.danhsach', ['course'=>$course]); 
    }

    public function getThem(){
      return view('admin.course.them');
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
       $course = new Course;
       $course->name = $request->Ten;
       $course->description = $request->NoiDung;
      
       
       if($request->hasFile('Hinh')){
       
        $file = $request->file('Hinh');
        $duoi = $file->getClientOriginalExtension();
        if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg' ){
            return redirect('admin/course/them')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
        }
        $name = $file->getClientOriginalName();
        $Hinh = str_random(4)."_".$name; 
        //randomr ra 1 chuoi de ten hinh k bi trung
        while(file_exists("upload/course/".$Hinh)){
            $Hinh = str_random(4)."_".$name; 
        }
        
        $file->move("upload/course", $Hinh);
      
        

        $course->picture = $Hinh;
        
        //Luu file hinh moi
    }
    else{
            $course->picture = "";
    }
    $course->save();
    return redirect('admin/course/them')->with('thongbao','Them Thanh Cong');
    }
        

    public function getSua($id){
     $course = Course::find($id);
     return view('admin.course.sua',['course'=>$course]);
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
           $course = Course::find($id);
           $course->name = $request->Ten;
           $course->description = $request->NoiDung;
           
           
           if($request->hasFile('Hinh')){
           
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg' ){
                return redirect('admin/course/them')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name; 
            //randomr ra 1 chuoi de ten hinh k bi trung
            while(file_exists("upload/course/".$Hinh)){
                $Hinh = str_random(4)."_".$name; 
            }
           
            $file->move("upload/course", $Hinh);
          
            
    
            $course->picture = $Hinh;
            
            //Luu file hinh moi
        }
       
        $course->save();
        return redirect('admin/course/sua/'.$id)->with('thongbao','Sua Thanh Cong');
    }
    public function getXoa($id){
        $course = Course::find($id);
        $course->delete();
        return redirect('admin/course/danhsach')->with('thongbao','Xoa Thanh Cong');
    }
} 
