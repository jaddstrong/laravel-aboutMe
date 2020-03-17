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

Route::get('/', 'InfosController@index');
Route::get('/info', 'InfosController@info');
Route::get('/exp', 'InfosController@exp');
Route::get('/contact', 'InfosController@contact');


