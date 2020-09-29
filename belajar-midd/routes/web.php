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

Route::get('/route1','TestController@route1');
Route::get('/route2','TestController@route2');
Route::get('/route3','TestController@route3');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
