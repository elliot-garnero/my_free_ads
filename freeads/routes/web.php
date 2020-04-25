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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/search', 'PostController@search');
Route::get('/posts/searchResult', 'PostController@searchResult');

Route::resource('posts', 'PostController');
// Route::resource('posts', 'PostController')->middleware('verified');
//Route::get('/posts', ('PostController@index'));

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
