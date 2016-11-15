<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
// 
// // 报修保单提交
// Route::post('/postRepair', 'RepairController@postRepair');
// // 登录验证
// Route::post('/login', 'RepairController@login');
// // 其他测试
// Route::post('/someTest', 'RepairController@someTest');
