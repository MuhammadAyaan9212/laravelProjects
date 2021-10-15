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

Route::get('/ayaan', function () {
  return view('Ayaan');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/countries', 'CountriesController@index');
Route::get('/countries/create', 'CountriesController@create');
Route::post('/countries/store', 'CountriesController@store');
Route::get('/countries/show/{id}', 'CountriesController@show');

//MrpmAutos Routes
Route::get('/mrpmautos', 'MrpmautosController@index')->name('mrpmautos.index');
Route::get('/mrpmautos/about', 'MrpmautosController@about')->name('mrpmautos.about');
Route::get('/mrpmautos/contact', 'MrpmautosController@contact')->name('mrpmautos.contact');
Route::get('/mrpmautos/services', 'MrpmautosController@services')->name('mrpmautos.services');
Route::get('/mrpmautos/team', 'MrpmautosController@team')->name('mrpmautos.team');
