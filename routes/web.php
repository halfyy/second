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
    return view('login');
});
Route::get('/mainUser', function () {
    return view('mainUser');
});
Route::get('/profileUser', function () {
    return view('profileUser');
});
Route::get('/feedUser',function(){
    return view('feedUser');
});

Route::get('/mainVol', function () {
    return view('mainVol');
});
Route::get('/profileVol', function () {
    return view('profileVol');
});
Route::get('/feedVol',function(){
    return view('feedVol');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
