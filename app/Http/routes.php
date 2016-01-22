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

/*Route::get('/', function () {
    return view('welcome');
});*/

define('av','admin'); //admin theme >> admin view.
define('ADMIN','admin_panel');  //admin panel
define('theme','theme');  //theme
define('admin_assets',url('resources/views/admin/'));  //admin assets

Route::group(['middleware'=>'admin_auth'],function(){
    Route::get(ADMIN,'Admin@index');
    Route::get(ADMIN.'/logout','Admin@logout');
    Route::get(ADMIN.'/settings','Settings@index');

});

/*Route::group(['after'=>'notlogin'],function(){
    Route::get(ADMIN.'/login','Admin@login');
    Route::post(ADMIN.'/login','Admin@post_login');
});*/

Route::get(ADMIN.'/login','Admin@login');
Route::post(ADMIN.'/login','Admin@post_login');
