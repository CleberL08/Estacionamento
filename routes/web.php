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

Route::get('/', 'HomeController@Home')->name('Home');

Route::get('/carros','CarsController@ShowCars')->name('ShowCar');

Route::get('/carros/cadastrar-clientes','RegisterController@create')->name('registerUser');
Route::post('/carros/cadastrar-clientes','RegisterController@store');   