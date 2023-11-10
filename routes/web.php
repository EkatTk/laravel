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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/show', 'HomeController@show')->name('show');
Route::get('/read', 'HomeController@read')->name('read');
Route::get('/episodes', 'HomeController@episodes')->name('episodes');

Route::get('/season/{slug}', 'HomeController@showing')->name('home.season');
Route::get('/episode/{slug}', 'HomeController@episode')->name('home.episode');
Route::get('/article/{slug}', 'HomeController@reading')->name('home.article');
Route::get('/tag/{slug}', 'TagController@show')->name('tags.single');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'MainController@index')->name('admin.index');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/tags', 'TagController');
    Route::resource('/posts', 'PostController');
    Route::resource('/seasons', 'SeasonController');
    Route::resource('/episodes', 'EpisodeController');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', 'UserController@create')->name('register.create');
    Route::post('/register', 'UserController@store')->name('register.store');
    Route::get('/login', 'UserController@loginForm')->name('login.create');
    Route::post('/login', 'UserController@login')->name('login');
});

Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');
