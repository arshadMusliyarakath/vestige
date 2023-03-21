<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/','FrondEndController@homeScreen')->name('home');
Route::get('form/{id}','FrondEndController@Form')->name('form');

Route::post('form-submited','FrondEndController@formSubmited')->name('form.submited');