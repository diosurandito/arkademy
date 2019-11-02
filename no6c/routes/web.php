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

// Route::get('/', function () {
// 	return view('welcome');
// });

Route::get('/', 'TransactionController@index')->name('user.trans.index');
Route::post('/add', 'TransactionController@store')->name('user.trans.add');
Route::patch('/update/{id}', 'TransactionController@update')->name('user.trans.update');
Route::get('/destroy/{id}', 'TransactionController@destroy');
