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

Route::get('/', "TodoController@home")->name('home');

Route::post('/create',"TodoController@store")->name('store');

Route::get('/edit/{todo}', "TodoController@edit")->name('edit');

Route::post('/update/{todo}',"TodoController@update")->name('update');

Route::post('/delete/{todo}', "TodoController@delete")->name('delete');
