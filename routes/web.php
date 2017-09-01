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
    return view('theme.create.type-products');
});

//Route::get('admin','PageController@admin');

Route::prefix('admin')->group(function () {

	Route::get('/','PageController@admin');

});
