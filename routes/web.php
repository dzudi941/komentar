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
Route::resource('komentar', 'KomentarController');

Auth::routes();

Route::get('/home', 'KomentarController@index');

Route::post('komentar/addLike', 'KomentarController@addLikes');
Route::post('komentar/deleteLike', 'KomentarController@deleteLikes');
Route::post('komentar/addDisLike', 'KomentarController@addDisLikes');
Route::post('komentar/deleteDisLike', 'KomentarController@deleteDisLikes');

Route::get('najboljeOcenjeni', 'KomentarController@najboljeOcenjeni');
