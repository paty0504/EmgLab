<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ServiceContact;
class ServiceContactController extends Controller
{
    //
    public function getDanhSach(){
        $servicecontact= ServiceContact::all();
        return view('admin.servicecontact.danhsach', ['servicecontact'=>$servicecontact]); 
    }

    public function getXoa($id){
        $servicecontact = ServiceContact::find($id);
        $servicecontact->delete();
        return redirect('admin/servicecontact/danhsach')->with('thongbao','Xoa Thanh Cong');
    }
 
        

 
 
} 
