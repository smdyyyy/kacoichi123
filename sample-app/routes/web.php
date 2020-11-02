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

Route::resource('/about','AboutController')->only('index');
Route::resource('/posts','PostController')->only(['show','create','store']);
Route::resource('/users','UserController')->only(['show','edit','update','destroy']);