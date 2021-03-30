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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//投稿保存用
Route::post('/posts/store', 'ArticleController@store')->name('posts.show');
//
Route::get('/posts/create', 'ArticleController@create')->name('posts.create');
//表示用
Route::get('/posts/view', 'ArticleController@show')->name('posts.show');

//エディタ表示用
Route::get('/create', 'Summernote@create');
//画像保存用
Route::post('/temp', 'Summernote@image');