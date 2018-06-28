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
    return view('index');
});
Route::get('/single', function () {
    return view('single');
});
Route::get('/add', function () {
    return view('add');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/mybooks', function () {
    return view('mybooks');
});

Route::resource('books', 'BookController')->only([
    'create', 'store', 'show', 'destroy'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
