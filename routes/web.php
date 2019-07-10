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
	return 'Hello World!';
});

Route::get('admin/login', 'Auth\AdminController@showLoginForm');
Route::post('admin/login','Auth\AdminController@login');
Route::post('admin/logout','Auth\AdminController@logout');
