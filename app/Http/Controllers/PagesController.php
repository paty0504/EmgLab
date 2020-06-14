<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Course;
use App\Product;
use App\Project;
use App\Service;
use App\User;
use App\Applicant;
class PagesController extends Controller
{
    function __construct(){
        
        // if(Auth::check()){
        //     view()->share('nguoidung',Auth::user());
        // } 
    }
    function trangchu(){
        $project = Project::all();
        return view('pages.trangchu', ['project'=>$project]);
    }
    function listproject(){
        $project = Project::all();
        return view('pages.listproject', ['project'=>$project]);
    }
    function detailproject($id){
        $project = Project::find($id);
        return view('pages.detailproject', ['project'=>$project]);
    }
    function listproduct(){
        $product = Product::all();
        return view('pages.listproduct', ['product'=>$product]);
    }
    function detailproduct($id){
        $product = Product::find($id);
        return view('pages.detailproduct', ['product'=>$product]);
    }
    function listservice(){
        $service = Service::all();
        return view('pages.listservice', ['service'=>$service]);
    }
    function detailservice($id){
        $service = Service::find($id);
        return view('pages.detailservice', ['service'=>$service]);
    }
    function listcourse(){
        $course = Course::all();
        return view('pages.listcourse', ['course'=>$course]);
    }
    function detailcourse($id){
        $course = Course::find($id);
        return view('pages.detailcourse', ['course'=>$course]);
    }
    function contact(){
        return view('pages.contact');
    }
    function recruit(){
        return view('pages.recruit');
    }
    function getApply(){
        return view('pages.apply');
    }
    function postApply(Request $request){
        $this->validate($request,[
            'name' => 'required|min:3',
            'mail' => 'required|email',
            'grade' =>'required',
            'school' => 'required'
            
          ],[
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
            'mail.required' => 'Bạn chưa nhập email',
            'mail.email' => 'Bạn chưa nhập đúng định dạng email',
            
            'grade.required' => 'Bạn chưa chọn khóa học',
            'school.required' => 'Bạn chưa chọn viện ',
            
            
          ]);
          $applicant = new Applicant;
          $applicant->name = $request->name;
          $applicant->mail = $request->mail;
          $applicant->phone = $request->phone;
          $applicant->grade = $request->grade;
          $applicant->school = $request->school;
          if($request->hasFile('Hinh')){
       
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg' ){
                return redirect('apply')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name; 
            //randomr ra 1 chuoi de ten hinh k bi trung
            while(file_exists("upload/cv/".$Hinh)){
                $Hinh = str_random(4)."_".$name; 
            }
            
            $file->move("upload/cv", $Hinh);
          
            
    
            $applicant->cv = $Hinh;
            
            //Luu file hinh moi
        }
        else{
                $applicant->cv = "";
        }
          $applicant->save();
          return redirect('apply')->with('thongbao','Đăng ký thành công');
    }

}
