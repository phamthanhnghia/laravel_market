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
Auth::routes();
Route::get('/', 'HomeController@index')->name('admin');

// Route::get('/', function () {
//     return view('theme.create.type-products');
// });

//Route::get('admin','PageController@admin');

Route::prefix('admin')->group(function () {
  Route::resource('products','ProductController');
  Route::resource('type-products','TypeProductController');
  Route::resource('product-manage','ProductManageController');
});
