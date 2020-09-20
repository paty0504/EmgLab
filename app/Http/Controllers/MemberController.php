<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Member;
class memberController extends Controller
{
    //
    public function getDanhSach(){
        $member= member::all();
        return view('admin.member.danhsach', ['member'=>$member]); 
    }

    public function getThem(){
      return view('admin.member.them');
    }

    public function postThem(Request $request){
       $this->validate($request,[
        'name' => 'required',
        'email' => 'required',
        'role' => 'required',
        'job' => 'required',
        'grade' => 'required',
    
       ],
       [
        'name.required' => 'Bạn chưa nhập tên',
        'role.required' => 'Bạn chưa nhập chức vụ',
        'job.required' => 'Bạn chưa nhập chuyên môn',
        'email.required' => 'Bạn chưa nhập email',
        'grade.required' => 'Bạn chưa nhập khóa học',
       ]);
       $member = new Member;
       $member->name = $request->name;
       $member->role = $request->role;
       $member->job = $request->job;
       $member->email = $request->email;
       $member->grade = $request->grade;
       $member->current_member = $request->quyen;
      
       
       if($request->hasFile('Hinh')){
       
        $file = $request->file('Hinh');
        $duoi = $file->getClientOriginalExtension();
        if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg' ){
            return redirect('admin/member/them')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
        }
        $name = $file->getClientOriginalName();
        $Hinh = str_random(4)."_".$name; 
        //randomr ra 1 chuoi de ten hinh k bi trung
        while(file_exists("upload/member/".$Hinh)){
            $Hinh = str_random(4)."_".$name; 
        }
        
        $file->move("upload/member", $Hinh);
      
        

        $member->picture = $Hinh;
        
        //Luu file hinh moi
    }
    else{
            $member->picture = "";
    }
    $member->save();
    return redirect('admin/member/them')->with('thongbao','Them Thanh Cong');
    }
        

    public function getSua($id){
     $member = Member::find($id);
     return view('admin.member.sua',['member'=>$member]);
    }

    public function postSua(Request $request, $id){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'job' => 'required',
            'grade' => 'required',
        
           ],
           [
            'name.required' => 'Bạn chưa nhập tên',
            'role.required' => 'Bạn chưa nhập chức vụ',
            'job.required' => 'Bạn chưa nhập chuyên môn',
            'email.required' => 'Bạn chưa nhập email',
            'grade.required' => 'Bạn chưa nhập khóa học',
           ]);
           $member = Member::find($id);
           $member->name = $request->name;
           $member->role = $request->role;
           $member->job = $request->job;
           $member->email = $request->email;
           $member->grade = $request->grade;
           $member->current_member = $request->quyen;
           if($request->hasFile('Hinh')){
           
            $file = $request->file('Hinh');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg' ){
                return redirect('admin/member/them')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
            }
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name; 
            //randomr ra 1 chuoi de ten hinh k bi trung
            while(file_exists("upload/member/".$Hinh)){
                $Hinh = str_random(4)."_".$name; 
            }
           
            $file->move("upload/member", $Hinh);
          
            
    
            $member->picture = $Hinh;
            
            //Luu file hinh moi
        }
       
        $member->save();
        return redirect('admin/member/sua/'.$id)->with('thongbao','Sua Thanh Cong');
    }
    public function getXoa($id){
        $member = member::find($id);
        $member->delete();
        return redirect('admin/member/danhsach')->with('thongbao','Xoa Thanh Cong');
    }
} 
