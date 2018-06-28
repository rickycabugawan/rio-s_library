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
Route::get('/', 'HomeController@index')->name('home');

Route::get('/search', 'BookController@search');

Route::get('/mybooks', 'BookController@mybooks');

Route::resource('books', 'BookController')->only([
    'create', 'store', 'show', 'destroy'
]);


Auth::routes();


