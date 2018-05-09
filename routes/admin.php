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



Route::group(['prefix'=>'console','middleware'=>['web'],'namespace'=>'Admin'],function(){
   Route::get('login',"LoginController@login");
   Route::post('postlogin',"LoginController@postLogin");
   Route::get('postlogin',"LoginController@postLogin");
   Route::get('loginout',"LoginController@loginOut");
   Route::get('index',"IndexController@index")->name("console.index");
   Route::get('m',"IndexController@m")->name("console.main");
   Route::get('t',"IndexController@t")->name("console.top");
   Route::get('l',"IndexController@l")->name("console.left");
});




// Route::get('console/login', 'UserController@show');