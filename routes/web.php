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


Route::get('/about', '\App\Http\Controllers\HelloController@about');

Route::get('/service', '\App\Http\Controllers\ServiceController@index');
Route::post('/service', '\App\Http\Controllers\ServiceController@store');

Route::get('/customers', '\App\Http\Controllers\CustomerController@index');
Route::get('/customers/create', '\App\Http\Controllers\CustomerController@create');
Route::get('/customers/{customer}', '\App\Http\Controllers\CustomerController@show');
Route::get('/customers/{customer}/edit', '\App\Http\Controllers\CustomerController@edit');
Route::patch('/customers/{customer}', '\App\Http\Controllers\CustomerController@update');
Route::post('/customers', '\App\Http\Controllers\CustomerController@store');
Route::delete('/customers/{customer}', '\App\Http\Controllers\CustomerController@destroy');
