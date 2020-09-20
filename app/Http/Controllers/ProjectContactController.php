<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProjectContact;
class ProjectContactController extends Controller
{
    //
    public function getDanhSach(){
        $projectcontact= Projectcontact::all();
        return view('admin.projectcontact.danhsach', ['projectcontact'=>$projectcontact]); 
    }

    public function getXoa($id){
        $projectcontact = Projectcontact::find($id);
        $projectcontact->delete();
        return redirect('admin/projectcontact/danhsach')->with('thongbao','Xoa Thanh Cong');
    }
 
        

 
 
} 
