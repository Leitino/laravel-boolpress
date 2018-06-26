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

Route::get('/', function (){
  return view('welcome');
});
Route::get('/homePage', 'boolpressController@homePage')->name('homePage');
Route::match(['get', 'post'], '/add', 'boolpressController@add')->name('add');
Route::get('post/{id}', 'boolpressController@show')->name('show');
Route::match(['get', 'post'], '/edit/{id}', 'boolpressController@edit')->name('edit');
Route::get('delete/{id}', 'boolpressController@delete')->name('delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
