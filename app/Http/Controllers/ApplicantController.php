<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Applicant;
class ApplicantController extends Controller
{
    //
    public function getDanhSach(){
        $applicant= Applicant::all();
        return view('admin.applicant.danhsach', ['applicant'=>$applicant]); 
    }

    public function getXoa($id){
        $applicant = Applicant::find($id);
        $applicant->delete();
        return redirect('admin/applicant/danhsach')->with('thongbao','Xoa Thanh Cong');
    }
 
        

 
 
} 
