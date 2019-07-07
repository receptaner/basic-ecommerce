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

Route::get('/', 'homePageController@index')->name('home');

Route::get('/category/{category_name}', 'categoryController@index')->name('category');

Route::get('/urun/{slugProductName}', 'productController@index')->name('product');

Route::get('/sepet', 'basketController@index')->name('basket');

Route::get('/odeme', 'paymentController@index')->name('payment');

Route::get('/siparisler', 'ordersController@index')->name('orders');

Route::get('/siparisler/{id}', 'ordersController@detail')->name('ordersDetail');

Route::group(['prefix' => 'kullanici'], function (){
    Route::get('/oturumac', 'userController@login')->name('user.login');
    Route::get('/kaydol', 'userController@register')->name('user.register');
});


