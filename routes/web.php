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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/welcome', 'welcome');

Route::get('foo', function () {
    return "Hellow World";
});
    

Route::get('user/{id}', 'UserController@show');
    

Route::get('/one', function () {
    return view('one', ['name' => 'James']);
});
Route::get('/post/{post}',function(){
  echo route('post.show',['post'=>1]);;
})->name('post.show');

Route::get('/{locale}/posts',function($locale){
    echo $locale;
})->name('post.index');


Route::get('blade',function(){
    return view('child',['name'=>'lily']);
});