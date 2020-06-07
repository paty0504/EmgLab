<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Course;
use App\Product;
use App\Project;
use App\Service;
use App\User;

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
}
