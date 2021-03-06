<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin/dangnhap','UserController@getdangnhapAdmin');
Route::post('admin/dangnhap','UserController@postdangnhapAdmin');
Route::get('admin/logout','UserController@getDangXuatAdmin');
Route::group(['prefix' => 'admin' , 'middleware'=>'adminLogin' ], function () {
    Route::group(['prefix' => 'service'], function () {
        Route::get('danhsach','ServiceController@getDanhSach');

        Route::get('sua/{id}','ServiceController@getSua');
        Route::post('sua/{id}','ServiceController@postSua');
       
        Route::get('xoa/{id}','ServiceController@getXoa');
       
        Route::get('them','ServiceController@getThem');
        Route::post('them','ServiceController@postThem');
    });
 
    Route::group(['prefix' => 'user'], function () {
        //tao route group user
       
        Route::get('danhsach','UserController@getDanhSach');

        Route::get('sua/{id}','UserController@getSua');
        Route::post('sua/{id}','UserController@postSua');
       
        Route::get('xoa/{id}','UserController@getXoa');
       
        Route::get('them','UserController@getThem');
        Route::post('them','UserController@postThem');
    });
    Route::group(['prefix' => 'course'], function () {
        //tao route group user
       
        Route::get('danhsach','CourseController@getDanhSach');

        Route::get('sua/{id}','CourseController@getSua');
        Route::post('sua/{id}','CourseController@postSua');
       
        Route::get('xoa/{id}','CourseController@getXoa');
       
        Route::get('them','CourseController@getThem');
        Route::post('them','CourseController@postThem');
    });

    Route::group(['prefix' => 'project'], function () {
        //tao route group user
       
        Route::get('danhsach','ProjectController@getDanhSach');

        Route::get('sua/{id}','ProjectController@getSua');
        Route::post('sua/{id}','ProjectController@postSua');
       
        Route::get('xoa/{id}','ProjectController@getXoa');
       
        Route::get('them','ProjectController@getThem');
        Route::post('them','ProjectController@postThem');
    });
    Route::group(['prefix' => 'applicant'], function () {
        //tao route group user
       
        Route::get('danhsach','ApplicantController@getDanhSach');
        Route::get('xoa/{id}','ApplicantController@getXoa');
     
    });
    Route::group(['prefix' => 'projectcontact'], function () {
        //tao route group user
       
        Route::get('danhsach','ProjectContactController@getDanhSach');
        Route::get('xoa/{id}','ProjectContactController@getXoa');
     
    });
    Route::group(['prefix' => 'servicecontact'], function () {
        //tao route group user
       
        Route::get('danhsach','ServiceContactController@getDanhSach');
        Route::get('xoa/{id}','ServiceContactController@getXoa');
     
    });
    Route::group(['prefix' => 'productcontact'], function () {
        //tao route group user
       
        Route::get('danhsach','ProductContactController@getDanhSach');
        Route::get('xoa/{id}','ProductContactController@getXoa');
     
    });
    Route::group(['prefix' => 'product'], function () {
        //tao route group user
       
        Route::get('danhsach','ProductController@getDanhSach');

        Route::get('sua/{id}','ProductController@getSua');
        Route::post('sua/{id}','ProductController@postSua');
       
        Route::get('xoa/{id}','ProductController@getXoa');
       
        Route::get('them','ProductController@getThem');
        Route::post('them','ProductController@postThem');
    });
    Route::group(['prefix' => 'member'], function () {
        //tao route group user
       
        Route::get('danhsach','MemberController@getDanhSach');

        Route::get('sua/{id}','MemberController@getSua');
        Route::post('sua/{id}','MemberController@postSua');
       
        Route::get('xoa/{id}','MemberController@getXoa');
       
        Route::get('them','MemberController@getThem');
        Route::post('them','MemberController@postThem');
    });
   
});
Route::get('trangchu','PagesController@trangchu');
Route::get('listproject','PagesController@listproject');
Route::get('detailproject/{id}','PagesController@detailproject');
Route::get('contact','PagesController@contact');
Route::get('recruit','PagesController@recruit');
Route::get('listproduct','PagesController@listproduct');
Route::get('listmember','PagesController@listmember');
Route::get('oldmember','PagesController@oldmember');
Route::get('detailproduct/{id}','PagesController@detailproduct');
Route::get('listservice','PagesController@listservice');
Route::get('detailservice/{id}','PagesController@detailservice');
Route::get('listcourse','PagesController@listcourse');
Route::get('detailcourse/{id}','PagesController@detailcourse');
Route::get('apply','PagesController@getApply');
Route::post('apply','PagesController@postApply');
Route::get('dangnhap','PagesController@getDangNhap');
Route::post('dangnhap','PagesController@postDangNhap');
Route::get('dangxuat', 'PagesController@getDangxuat');
Route::get('dangky','PagesController@getDangky');
Route::post('dangky','PagesController@postDangky');
Route::get('lienhe/{id}','PagesController@getlienhe');
Route::post('lienhe/{id}','PagesController@postlienhe');
Route::get('servicecontact/{id}','PagesController@getservicecontact');
Route::post('servicecontact/{id}','PagesController@postservicecontact');
Route::get('productcontact/{id}','PagesController@getproductcontact');
Route::post('productcontact/{id}','PagesController@postproductcontact');