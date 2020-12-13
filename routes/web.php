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

Route::get('/','crud@index');
Route::get('/register','crud@create');
Route::get('/detail/{id}', 'crud@show');
Route::get('/delete/{id}', 'crud@destroy');
Route::post('/save', 'crud@store');
Route::post('/update', 'crud@update');