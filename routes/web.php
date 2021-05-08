<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PostController@index')->name('home');
Route::get('/Home', 'PostController@index')->name('home');
Route::get('/posts', 'PostController@index')->name('posts');
//Route::get('/single-post', 'PostController@show')->name('single');
Route::get('/Create', 'PostController@create')->name('create');
Route::get('posts/{id}', "PostController@show")->name('post.show');

Route::post('/comments', function (){
    print_r($_POST);
});

