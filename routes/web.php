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

Route::get('/', 'HomeController@index');
/* Route::group(['middleware' => 'admin'], function()
    {
        Route::resource('/cateogry', 'CategoryController');
    }); */

Route::resource('/cateogry', 'CategoryController')->middleware('admin');
Route::resource('/cateogry', 'CategoryController', ['only' => 'show']);
Route::resource('/cateogry', 'CategoryController', ['only' => 'index']);
Route::resource('/post', 'PostController');
Route::resource('/arsimi', 'ArsimiController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth', 'admin');
Route::get('/admin/category', 'AdminController@category')->name('admincategory')->middleware('auth', 'admin');