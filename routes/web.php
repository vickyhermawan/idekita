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
    return view('/auth/login');
});

Route::get('template', function () {
    return view('layouts.master');
});

Route::get('master', function () {
    return view('master');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('ide','RegController@ide')->name('ide');


// Route::get('register',function (){
// 	return view('register'); 
// })->name('register'); 

// Route::post('reg','RegController@post_reg')->name('post_register'); 

// Route::get('login', function(){
// 	return view('login');
// })->name('login');