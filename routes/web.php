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

Route::get('/laravel', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('project');
});
Route::post('/studentform_submit','CrudController@store');
Route::get('/show','CrudController@show');
Route::get('/delete/{id}','\App\Http\Controllers\CrudController@destroy');
Route::get('/edit/{id}','\App\Http\Controllers\CrudController@edit');
Route::post('/update/{id}','\App\Http\Controllers\CrudController@update');
Route::get('/search','\App\Http\Controllers\CrudController@search');

