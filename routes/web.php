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

Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/posts_api', 'PageController@posts_api')->name('posts_api');
Route::get('/categories_api', 'PageController@categories')->name('categories');
Route::get('/tags_api', 'PageController@tags')->name('tags');

Route::resource("posts", "PostController");
Route::resource("categories", "CategoryController");
Route::resource("tags", "TagController");