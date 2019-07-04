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
    return view('beranda');
});

Route::get('/daftar', function () {
    return view('daftar');
});
//<<<<<<< HEAD
//Route::get('/login', function () {
//    return view('login');
//});
//=======

Auth::routes();
Route::get('/masuk', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('editprofile');
});

Route::get('/input', function () {
    return view('input');
});
Route::get('/Tempat', function () {
    return view('TempatUsaha');
});

Route::get('/detailp', function () {
    return view('Detailproduk');
});

Route::get('/detail2', function () {
    return view('cobainlagiya');
});
Route::get('/home', 'HomeController@index')->name('beranda');

Route::get('/editProfile/{id}', 'ProfileController@edit');
Route::put('/editProfile/{id}', 'ProfileController@update');

Route::get('/beranda', 'HomeController@index')->name('home');

Route::get('/createTempatUsaha', 'TempatUsahaController@create');
Route::resource('tempatUsaha','TempatUsahaController');
//Route::resource('/','ProdukController');
