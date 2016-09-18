<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//前台
// Route::get('/company', function () {
    // return view('home.company.index');
// });
//前台公司
Route::get('/company/index','CompanyController@index');
Route::get('/company/work','CompanyController@work');
Route::get('/position/create','CompanyController@create');
Route::resource('position','PositionController');

//liepin后台
Route::get('/admin/login','Admin\LoginController@login');//登录

Route::get('/admin/register','Admin\RegisterController@index');//注册

Route::post('/admin/dologin','Admin\LoginController@dologin');
Route::get('/admin/captcha/{tmp}','Admin\LoginController@captcha');
Route::get("/admin/index","Admin\LoginController@index");//后台首页

Route::get("/admin/logout","Admin\LoginController@logout");//后台退出

//公司模块
Route::resource("/admin/company","Admin\CompanyController");

//2 需要登录才能访问的页面 执行退出 \后台首页\后台学生页面
Route::group(["prefix"=>"admin","middleware"=>"myauth"],function(){
	Route::get("logout","Admin\LoginController@logout");//执行退出

	Route::get("/admin/index","Admin\LoginController@index");//后台首页

	//学生信息查询 
	Route::resource("/admin/company","Admin\CompanyController");
});


// Route::get('/admin/company', function () {
    // return view('admin.company.index');
// });
// Route::get('/admin/company/add', function () {
    // return view('admin.company.add');
// });

//stu资源路由
// Route::resource('stu','StuController');
//搜索路由
// Route::post('/stu/index','StuController@index');


//不通过控制器访问www.xuanzi.com/index
//index模板在laravel/views/index/index.blade.php
// Route::get('/index', function () {
    // return view('index.index');
// });

// 通过user控制器访问里面index方法
// Route::get('/index','IndexController@index');
// Route::get('/index/create','IndexController@create');

//资源路由
// Route::resource('user','UserController');

// Route::get('login','UserController@getLogin');
// Route::post('login','UserController@postLogin');

//admin后台路由---------------------------------------------------------
// Route::get('admin/login',"Admin\LoginController@index");
// Route::post('admin/login',"Admin\LoginController@doLogin");

//后台管理(采用路由组配置)
// Route::group(['prefix' => 'admin','middleware' => 'myauth'], function () {
    // 后台会员登陆退出模块
    // Route::get('login/logout',"Admin\LoginController@logout");
    
    // 网站首页
    // Route::get("index",function(){
        // return view("admin.index");
    // });
    // 网站新闻
     // Route::get("news",function(){
        // return view("admin.list");
    // });
    
    // 后台会员管理
    // Route::resource('/users',"Admin\usersController");
// });
