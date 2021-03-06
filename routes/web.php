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

Route::group(['prefix' => '/'], function () {
	Route::get('salary','myController@salary')->name('salary');
	Route::get('employee','myController@employee');
});

Route::group(['prefix' => 'config'], function () {
	Route::get('/salary','salaryController@index');
	Route::post('/import','salaryController@import');
});