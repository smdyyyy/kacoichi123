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

Auth::routes();
Route::get('/','PostController@index')->name('posts.index');
Route::get('/about','AboutController@index')->name('about.index');
Route::resource('/posts','PostController');

Route::group(['middleware' => 'auth'], function() {
Route::resource('/posts','PostController')->only(['create','store'])->middleware('auth');
Route::resource('/users','UserController')->only(['show','edit','update','destroy'])->middleware('auth');
});