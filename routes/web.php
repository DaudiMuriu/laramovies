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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/movie/create', 'MovieController@create')->name('movie.create');
Route::get('/movie/{id}', 'MovieController@edit')->name('movie.edit');
Route::post('/movie/create', 'MovieController@store')->name('movie.store');
Route::put('/movie/{id}', 'MovieController@update')->name('movie.update');
Route::get('/movies', 'MovieController@index')->name('movies.all');
