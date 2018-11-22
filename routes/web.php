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
    return view('idea');
});

Route::get('index', function () {
    return view('index');
});


Route::get('mainan','IdektiaController@mainan');

Route::get('detail', function () {
    return view('detail');
});
Route::get('tambahpost', function () {
    return view('tambahpost');
});


Route::get('master', function () {
    return view('master');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('reg',function (){
	return view('auth.register'); 
})->name('register'); 

Route::post('reg','RegController@post_reg')->name('post_register'); 