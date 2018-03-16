<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/a', function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){
 Route::resource('kategoris','kategoriController');
 Route::resource('berita','BeritasController');
});
 Route::get('/','PengunjungController@index');
 Route::get('/berita/{id}','PengunjungController@filter');
  Route::get('/selengkapnya/{id}','PengunjungController@selengkapnya');

