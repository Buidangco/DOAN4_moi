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
  Route::get('/Home1/createlogin','tao_login@index1');
      Route::post('/Home1/createlogin1','tao_login@index');
      Route::get('/Home1/login',['as'=>'/Home1/login','uses'=>'login_kh@index1']);
      Route::post('/Home1/login1','login_kh@index');
      Route::get('/Home1/dangxuat',['as'=>'logout','uses'=>'login_kh@logout']);
       Route::get('/Home/home',['as'=>'/Home/home','uses'=>'clien@home']);
Route::group(['middleware'=>['auth','admin']],function(){
      // Route::match(['get','post'],'/Home1/login',['as'=>'login','uses'=>'login_kh@index']);
      // Route::match(['get','post'],'/Home1/createlogin',['as'=>'login','uses'=>'tao_login@index']);
   // Route::match(['get','post'],'/Home/home',['as'=>'/Home/home','uses'=>'clien@home']);


    //đặt hàng
Route::post('/Home/Cart/dathang','clien@dathang');
});



Route::middleware(['web', 'subscribed'])->group(function () {
    
});
//clien
  Route::get('/Home/{code}',['as'=>'/Home/{code}','uses'=>'clien@post_loai']);
  Route::get('/Home/chitiet/{id}',['as'=>'/Home/chitiet/{id}','uses'=>'clien@chitiet']);
  Route::get('/Home/chitietloai/{id}',['as'=>'/Home/chitietloai/{id}','uses'=>'danhsachsanpham@danhsach']);
Route::group(['middleware'=>'auth'],function(){
 
});

Route::get('/danhsach/{price}/{code}','clien@price');
Route::get('/danhsach1/{mausac}/{code}','clien@mausac');

Route::get('/danhsachtimkiem/{nameprice}/{code}','danhsachsanpham@timkiem');
//chi tiết
Route::get('/save_list/{id}/{quanty}','clien@savelist');
//giỏ hàng
Route::get('/AddCart/{id}','clien@AddCart')->name('product.add');
Route::get('/DeleteItemCart/{id}','clien@DeleteItemCart')->name('xoasanpham');


Route::get('/Home/Cart/List_cart','clien@List_cart');
Route::get('/Delete_list_ItemCart/{id}','clien@DeletelistItemCart')->name('xoalistsanpham');
Route::get('/save_list_ItemCart/{id}/{quanty}','clien@savelistItemCart');



//admin
Route::group(['middleware'=>'guest'],function(){
      Route::match(['get','post'],'login',['as'=>'login','uses'=>'login@index']);
});
	

Route::group(['middleware'=>['auth']],function(){
      Route::get('/product',['as'=>'/product','uses'=>'thongke@index']);
      Route::get('/logout',['as'=>'/logout','uses'=>'login@logout']);
      Route::match(['get','post'],'/product/add',['as'=>'/product/add','uses'=>'Home@add']);
      Route::get('/product/view/{id}',['as'=>'/product/view','uses'=>'Home@view']);
      Route::match(['get','post'],'/product/edit/{id}',['as'=>'/product/edit','uses'=>'Home@edit']);
      Route::match(['get','post'],'/product/update',['as'=>'/product/update','uses'=>'Home@update']);
      // Route::match(['get','post'],'/product/delete/{id}',['as'=>'/product/delete','uses'=>'Home@delete']);
      Route::post('/product/delete',['as'=>'/product/delete','uses'=>'Home@delete']);
      Route::post('/product/adddata',['as'=>'/product/adddata','uses'=>'Home@add_laydulieuve']);

      Route::get('/danhsachtimkiem/{nameprice}/{code}','Home@timkiem');
});
 Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });

//hóa đơn nhập
Route::group(['middleware'=>'auth'],function(){
    Route::get('/product/CTHD',['as'=>'/product/CTHD','uses'=>'hoadonnhap@check']);
   Route::post('/product/CTHD',['as'=>'/product/CTHD','uses'=>'hoadonnhap@laythongtin']);
   Route::get('/product/CTHD/them/{id}/{mancc}/{tensp}/{gia}/{tenncc}/{soluong}','hoadonnhap@themvao');
    Route::get('/product/CTHD/check/{id}/{sery}/{mancc}','hoadonnhap@checkdulieu');
   // Route::get('/product/CTHD2',['as'=>'/product/CTHD2','uses'=>'hoadonnhap@post_cthd_all1']);
   // Route::get('/product/CTHDadd',['as'=>'/product/CTHDadd','uses'=>'hoadonnhap@post_cthd_all_add']);
});
// Route::group(['middleware'=>'auth'],function(){
//     Route::get('/product/CTHD',['as'=>'/product/CTHD','uses'=>'Home@get_cthd']);
//    Route::post('/product/CTHD',['as'=>'/product/CTHD','uses'=>'Home@post_cthd']);
//    Route::post('/product/CTHD1',['as'=>'/product/CTHD1','uses'=>'Home@post_cthd_all']);
//    Route::post('/product/CTHD2',['as'=>'/product/CTHD2','uses'=>'Home@post_cthd_all1']);
//    Route::post('/product/CTHDadd',['as'=>'/product/CTHDadd','uses'=>'Home@post_cthd_all_add']);
// });




//hóa đơn bán
Route::group(['middleware'=>'auth'],function(){
    Route::get('/product/khachhang',['as'=>'/product/khachhang','uses'=>'hoadonban@Khachhang']);
    Route::get('/product/hoadonban',['as'=>'/product/hoadonban','uses'=>'hoadonban@hoadonban']);
  // Route::get('/admin','admin\LoginController@showLoginForm')->name('login.admin');
});

Route::get('/product/hoadonban/layma/{id}','hoadonban@hoadonban_view')->name('product.view');
Route::get('/product/hoadonban/duyet/{id}','hoadonban@hoadonban_duyet')->name('product.duyet');

//don hang

 Route::get('/Home2/donhang','donhang@index');