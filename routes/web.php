<?php

use App\User;
use App\UserRequest;
use Illuminate\Http\Request;
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
Route::get('/createRequest',function(){
    return view('request');
});

Route::post('/addReq', function(Request $req){
    UserRequest::create([
        "objective" => $req->objective,
        "adress" => $req->adress,
        "description" => $req->description,
        "timee" => $req->timee,
    ]);
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
