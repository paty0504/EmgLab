<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProductContact;
class ProductContactController extends Controller
{
    //
    public function getDanhSach(){
        $productcontact= Productcontact::all();
        return view('admin.productcontact.danhsach', ['productcontact'=>$productcontact]); 
    }

    public function getXoa($id){
        $productcontact = Productcontact::find($id);
        $productcontact->delete();
        return redirect('admin/productcontact/danhsach')->with('thongbao','Xoa Thanh Cong');
    }
 
        

 
 
} 
