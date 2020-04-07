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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/myaccount/{username}', 'customerAccount@show')->name('customerAccount');
Route::get('/order', 'orderController@index')->name('order');
Route::get('/addtocart/{id}', 'cartController@add')->name('cart');

Route::get('/viewcart/{id}', 'cartController@show')->name('cart');
//Route::get('/payment/{id}', 'paymentsController@mpesa')->name('pay');
Route::get('/payment', 'paymentsController@create')->name('pay');
Route::post('/submitpayment', 'paymentsController@pay')->name('pay1');
