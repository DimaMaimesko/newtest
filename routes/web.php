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
Route::get('/','AlbumsController@index');
Route::get('/albums','AlbumsController@index')->name('albums.index');
Route::get('/albums/create','AlbumsController@create')->name('albums.create');

Route::get('/albums/{id}','AlbumsController@show')->name('albums.show');
Route::post('/albums/store','AlbumsController@store')->name('albums.store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
