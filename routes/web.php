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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index');


// 报修保单提交
Route::post('/postRepair', 'RepairController@postRepair');
// 登录验证
Route::post('/login', 'RepairController@login');
// 其他测试
Route::post('/someTest', 'RepairController@someTest');

// 后台系统
Route::group([ "namespace" => "Admin" ], function () {
    Route::post("/register", "AdminControll@register")->middleware("adminauth");
});
