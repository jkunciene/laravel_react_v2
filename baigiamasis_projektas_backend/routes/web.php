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

Route::get('/', 'HomeController@index');
Route::get('/add_category/', 'CategoryController@categoryForm');
Route::post('/store_category/', 'CategoryController@storeCategory'); // siuncia duomenis i db
Route::get('/category_management/', 'CategoryController@categoryManagement');
Route::get('/category_delete/{category}', 'CategoryController@categoryDelete');
Route::get('/add_product/', 'ProductController@productForm');
Route::post('/store_product/', 'ProductController@storeProduct'); // siuncia duomenis i db
Route::get('/product_management/', 'ProductController@productManagement');
Route::get('/product_delete/{product}', 'ProductController@productDelete');
Route::get('/product_update/{product}', 'ProductController@productUpdate');
Route::get('/error/', 'ProductController@error');
Route::post('/product_update_db/{product}', 'ProductController@productUdpdate2');// siuncia duomenis i db
Route::get('/orders_management/', 'OrderController@orderManagement');
Route::post('/order_status_update/{order}', 'OrderController@orderStatusUpdate');// siuncia duomenis i db
