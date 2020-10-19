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

Route::get('/admin', "App\Http\Controllers\NewsController@index")->name("adminindex");
Route::get('/admin/create', "App\Http\Controllers\NewsController@create")->name("admincreate");
Route::post('/admin/store', "App\Http\Controllers\NewsController@store")->name("adminstore");
Route::post('/admin/destroy', "App\Http\Controllers\NewsController@destroy")->name("admindestroy");
Route::get('/admin/show/{id}', "App\Http\Controllers\NewsController@show")->name("adminshow");
Route::post('/admin/add/comment', "App\Http\Controllers\NewsController@addcomment")->name("addnewcomment");
