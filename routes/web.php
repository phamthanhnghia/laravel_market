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

//Route::get('admin','PageController@admin');

Route::prefix('admin')->group(function () {

	Route::get('/','PageController@admin');

    // Route::get('type-product', function () {
    //     // Matches The "/admin/users" URL
    // });
    Route::resource('type-product','TypeProductController');
});

Route::get('test', 'PageController@test');


