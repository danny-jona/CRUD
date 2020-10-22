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

Route::get('/index', 'App\Http\Controllers\EmpleadosController@index');

Route::get('/create', 'App\Http\Controllers\EmpleadosController@create');

Route::get('/edit', 'App\Http\Controllers\EmpleadosController@edit');

Route::get('/form', 'App\Http\Controllers\EmpleadosController@form');

Route::get('/store', 'App\Http\Controllers\EmpleadosController@store');



//Route::resource('/empleados', 'App\Http\Controllers\EmpleadosController');

