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

Route::get('/', 'MainController@index');


Route::get('/dashboard', 'AdminsController@dashboard');


Route::get('/admins', 'AdminsController@admin');

Route::get('/articles', 'AdminsController@articles');

Route::get('/add', 'AdminsController@add');


Route::get('/users', 'AdminsController@users');

