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

// Route::get('/', function () {
//     return view('user/home');
// });

Route::get('/user/home','UserController@user_home')->name('user.home');
Route::get('/user/profile','UserController@user_profile')->name('user.profile');
Route::get('/user/search','UserController@user_search')->name('user.search');
Route::get('/user/upload','UserController@user_upload')->name('user.upload');
Route::get('/user/stories','UserController@user_stories')->name('user.stories');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
