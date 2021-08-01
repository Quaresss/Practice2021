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

Route::get('/', 'BaseController@home');

Route::get('/home', 'BaseController@home');

Route::get('/news', 'BaseController@news');

Route::get('/category/{slug}', 'BaseController@getPostsByCategory')->name('getPostsByCategory');

Route::get('/category/{slug_category}/{slug_post}', 'BaseController@getPost')->name('getPost');






