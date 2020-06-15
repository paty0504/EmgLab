<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserProject;
class UserProjectController extends Controller
{
    //
    public function getDanhSach(){
        $userproject= UserProject::all();
        return view('admin.userproject.danhsach', ['userproject'=>$userproject]); 
    }

    public function getXoa($id){
        $userproject = Userproject::find($id);
        $userproject->delete();
        return redirect('admin/userproject/danhsach')->with('thongbao','Xoa Thanh Cong');
    }
 
        

 
 
} 
