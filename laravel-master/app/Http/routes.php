<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', 'TrangChuController@home');


Route::get('/product', 'MenuController@Menu');

Route::get('/about', function(){
    return view('layout.aboutdt');
});

Route::get('/services', function(){
    return view('layout.servicesdt');
});

Route::get('/blog', function(){
    return view('layout.blogdt');
});

Route::get('/contact', function(){
    return view('layout.contactdt');
});

Route::get('/signup', function(){
    return view('layout.signupdt');
});

Route::get('/signin', function(){
    return view('layout.signindt');
});

Route::get('/SanPham/{MaSP}', 'MenuController@ChiTietSP');

Route::get('/Loai/{MaLoai}', 'TrangChuController@LoaiSP');

Route::get('/timkiem','TrangChuController@timkiem');


Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('/auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');

Route::get('/trangchudangnhap', 'TrangChuDangNhapController@home');

Route::get('/productdangnhap', 'MenuDangNhapController@Menu');

Route::get('/Loaidangnhap/{MaLoai}', 'TrangChuDangNhapController@LoaiSP');

Route::get('/SanPhamdangnhap/{MaSP}', 'MenuDangNhapController@ChiTietSP');

Route::get('/aboutdangnhap', function(){
    return view('layout.dangnhap.aboutdangnhap');
});

Route::get('/servicesdangnhap', function(){
    return view('layout.dangnhap.servicesdangnhap');
});

Route::get('/blogdangnhap', function(){
    return view('layout.dangnhap.blogdangnhap');
});

Route::get('/contactdangnhap', function(){
    return view('layout.dangnhap.contactdangnhap');
});

Route::get('/timkiemdangnhap','TrangChuDangNhapController@timkiem');