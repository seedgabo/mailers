<?php

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
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers:Origin, Content-Type, Accept, Authorization, X-Requested-With,X-XSRF-TOKEN, Auth-Token, X-CSRF-TOKEN Cf-Ipcountry, Cf-Ray, Cf-Connecting-Ip, Content-Length, Via, Host, Accept-Encoding, Cache-Control, Cf-Visitor, Connection, Connect-Time, User-Agent, X-Request-Id, Total-Route-Time,');

Route::get('/', function () {
    return view('welcome');
});

Route::any('/miamicre', 'MailController@miamicremail')
->middleware('api.web');
