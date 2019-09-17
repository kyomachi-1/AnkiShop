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

//Ring
Route::get('rings/create', 'RingsController@create')->name('rings.create');
Route::post('rings', 'RingsController@store')->name('rings.store');;
Route::get('rings/{id}', 'RingsController@show');
Route::put('rings/{id}', 'RingsController@update');
Route::delete('rings/{id}', 'RingsController@destroy');
Route::get('rings', 'RingsController@index')->name('rings.index');
Route::get('rings/{id}/edit', 'RingsController@edit')->name('rings.edit');