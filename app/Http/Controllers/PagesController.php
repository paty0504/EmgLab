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
use  App\Member;
use App\ProjectContact;
use App\ServiceContact;
use App\ProductContact;
class PagesController extends Controller
{
    function __construct(){
        
        if(Auth::check()){
            view()->share('nguoidung',Auth::user());
        } 
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
    function listmember(){
        $member = Member::where('current_member','=',1)->get();
        return view('pages.listmember', ['member'=>$member]);
    }
    function oldmember(){
        $member = Member::where('current_member','=',0)->get();
        return view('pages.oldmember', ['member'=>$member]);
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
    // function getDangNhap(){
    //     return view('pages.dangnhap');
    // }
    // function postDangNhap(Request $request){
    //     $this->validate($request,[
    //         'email'=>'required',
    //         'password'=>'required|min:3|max:32',
    //     ],
    //     [
    //         'email.required' => 'bạn chưa nhập email',
    //         'password.required' => 'ban chua nhap password',
    //         'password.min' => 'Password co do dai tu 3 den 32 ky tu',
    //         'password.max' => 'Password co do dai tu 3 den 32 ky tu',
    //     ]);
    //     if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
    //         return redirect('trangchu');
    //     }         
    //     else{
    //         return redirect('dangnhap')->with('thongbao','Đăng nhập không thành công');
    //     }
    // }
    // function getDangxuat(){
    //     Auth::logout();
    //     return redirect('trangchu');
    // }
    // function getDangky(){
    //     return view('pages.dangky');
    // }
    // function postDangky(Request $request){
    //     $this->validate($request,[
    //         'name' => 'required|min:3',
    //         'email' => 'required|email|unique:users,email',
    //         'password' => 'required|min:3|max:32',
            
    //       ],[
    //         'name.required' => 'Bạn chưa nhập tên người dùng',
    //         'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
    //         'email.required' => 'Bạn chưa nhập email',
    //         'email.email' => 'Bạn chưa nhập đúng định dạng email',
    //         'email.unique' => 'Email đã tồn tại',
    //         'password.required' => 'Bạn chưa nhập mật khẩu',
    //         'password.min' => 'mật khẩu phải có độ dài từ 3 đến 32 ký tự',
    //         'password.max' => 'mật khẩu phải có độ dài từ 3 đến 32 ký tự',
            
    //       ]);
    //       $user = new User;
    //       $user->name = $request->name;
    //       $user->email = $request->email;
    //       $user->password = bcrypt($request->password);
    //       $user->quyen = 0;
    //       $user->save();
    //       return redirect('dangnhap')->with('thongbao','Đăng ký thành công');
    // }

    // function getNguoiDung(){
    //     $user = Auth::user();
    //     return view('pages.nguoidung',['nguoidung'=>$user]);
    // }
    // function postNguoiDung(Request $request){
    //     $this->validate($request,[
    //         'name' => 'required|min:3',
           
            
    //       ],[
    //         'name.required' => 'Bạn chưa nhập tên người dùng',
    //         'name.min' => 'Tên người dùng phải có ít nhất 3 ký tự',
           
    //       ]);
    //       $user = Auth::user();
    //       $user->name = $request->name;
         
    //      if($request->changePassword == "on")
    //       {
    //         $this->validate($request,[
               
    //             'password' => 'required|min:3|max:32',
               
    //           ],[
              
    //             'password.required' => 'Bạn chưa nhập mật khẩu',
    //             'password.min' => 'mật khẩu phải có độ dài từ 3 đến 32 ký tự',
    //             'password.max' => 'mật khẩu phải có độ dài từ 3 đến 32 ký tự',
              
    //           ]);  
    //         $user->password = bcrypt($request->password);}

           
    //       $user->save();
    //       return redirect('nguoidung')->with('thongbao','Bạn đã sửa thành công');
    // }
    function getlienhe($id){
        $idproject = $id;
        $project = Project::find($id);
        return view('pages.projectcontact',['project'=>$project]);
    }
    function postlienhe($id, Request $request ){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'comment' => 'required',
            
        
           ],
           [
            'name.required' => 'Bạn chưa nhập tên',
            'email.required' => 'Hãy nhập email để chúng tôi có thể liên hệ với bạn!',
            'phone.required' => 'Hãy nhập số điện thoại để chúng tôi có thể liên hệ với bạn!',
            'comment.required' => 'Bạn chưa nhập mục đích liên hệ',
            
           ]);
        $idproject = $id;
        $project = Project::find($id);
        $projectcontact = new ProjectContact;
        $projectcontact->name = $request->name;
        $projectcontact->email = $request->email;
        $projectcontact->idproject = $idproject;
        $projectcontact->phone = $request->phone;
        $projectcontact->comment = $request->comment;
        $projectcontact->save();
        return view('pages.thanks',['email'=>$request->email]);
    }
    function getservicecontact($id){
        $idservice = $id;
        $service = Service::find($id);
        return view('pages.servicecontact',['service'=>$service]);
    }
    function postservicecontact($id, Request $request ){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'comment' => 'required',
            
        
           ],
           [
            'name.required' => 'Bạn chưa nhập tên',
            'email.required' => 'Hãy nhập email để chúng tôi có thể liên hệ với bạn!',
            'phone.required' => 'Hãy nhập số điện thoại để chúng tôi có thể liên hệ với bạn!',
            'comment.required' => 'Bạn chưa nhập mục đích liên hệ',
            
           ]);
        $idservice = $id;
        $service = Service::find($id);
        $servicecontact = new ServiceContact;
        $servicecontact->name = $request->name;
        $servicecontact->email = $request->email;
        $servicecontact->idservice = $idservice;
        $servicecontact->phone = $request->phone;
        $servicecontact->comment = $request->comment;
        $servicecontact->save();
        return view('pages.thanks',['email'=>$request->email]);
    }

    function getproductcontact($id){
        $idproduct = $id;
        $product = Product::find($id);
        return view('pages.productcontact',['product'=>$product]);
    }
    function postproductcontact($id, Request $request ){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'comment' => 'required',
            
        
           ],
           [
            'name.required' => 'Bạn chưa nhập tên',
            'email.required' => 'Hãy nhập email để chúng tôi có thể liên hệ với bạn!',
            'phone.required' => 'Hãy nhập số điện thoại để chúng tôi có thể liên hệ với bạn!',
            'comment.required' => 'Bạn chưa nhập mục đích liên hệ',
            
           ]);
        $idproduct = $id;
        $product = Product::find($id);
        $productcontact = new ProductContact;
        $productcontact->name = $request->name;
        $productcontact->email = $request->email;
        $productcontact->idproduct = $idproduct;
        $productcontact->phone = $request->phone;
        $productcontact->comment = $request->comment;
        $productcontact->save();
        return view('pages.thanks',['email'=>$request->email]);
    }
}
