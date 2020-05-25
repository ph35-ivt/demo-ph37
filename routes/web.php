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

Route::resource('categories', 'CategoryController');
Route::resource('products', 'ProductController');
// Route::get('/categories', 'CategoryController@index')->name('list-cate');
// Route::get('/categories/{category}', 'CategoryController@show')->name('cate.show');
Route::get('/categories/{id}/products', 'CategoryController@getListProductByCateID')->name('list-product-by-cate');
// Route::get('products', 'ProductController@index')->name('list-product');
// Route::get('products/create', 'ProductController@create')->name('product.create');
// Route::get('products/{product}', 'ProductController@show')->name('product.show');
// Route::post('products', 'ProductController@store')->name('product.store');
// Route::get('products/{id}/edit', 'ProductController@edit')->name('product.edit');
// Route::put('products/{id}', 'ProductController@update')->name('product.update');
// Route::delete('products/{id}', 'ProductController@destroy')->name('product.delete');
