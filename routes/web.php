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
Route::get('/check','EloquentController@check');

Route::get('/check2','EloquentController@check2');
Route::get('/short','EloquentController@short');
Route::get('/map','EloquentController@map');
Route::get('/merge','EloquentController@merge');
Route::get('/groupby','EloquentController@groupBy');
Route::get('/pop','EloquentController@pop');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/home', 'HomeController@index')->name('home');
