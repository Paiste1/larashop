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

// главная
Route::get('/', 'HomeController@index')->name('home');

// категории
Route::get('/category/{category}', 'ProductController@showcategory')->name('showCategory');

// карточка товара
Route::get('/category/{category}/{product_id}', 'ProductController@show')->name('showProduct');

// корзина
Route::get('/cart', 'CartController@index')->name('cartIndex');

// добавление в  корзину
Route::post('/add-to-cart', 'CartController@addToCart')->name('addToCart');
