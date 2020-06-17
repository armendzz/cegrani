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
Route::resource('/post', 'PostController')->middleware('auth');
Route::resource('/post', 'PostController', ['only' => 'show']);
Route::resource('/post', 'PostController', ['only' => 'index']);
Route::resource('/arsimi', 'ArsimiController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mail', 'HomeController@mail')->name('mail');
Route::post('/mailcreate', 'HomeController@mailcreate')->name('mailcreate');
Route::get('/admin', 'AdminController@index')->name('admin')->middleware('auth', 'admin');
Route::get('/admin/category', 'AdminController@category')->name('admincategory')->middleware('auth', 'admin');
Route::get('/admin/post', 'AdminController@post')->name('adminpost')->middleware('auth', 'admin');
Route::get('/admin/createpost', 'AdminController@postshto')->name('adminpostc')->middleware('auth', 'admin');
Route::get('/admin/trashedpost', 'AdminController@trashed')->name('adminposttr')->middleware('auth', 'admin');
Route::get('/admin/postedit/{post}', 'AdminController@postedit')->name('adminposte')->middleware('auth', 'admin');
Route::put('/admin/post-restore/{post}', 'AdminController@restore')->name('adminpostrs')->middleware('auth', 'admin');


