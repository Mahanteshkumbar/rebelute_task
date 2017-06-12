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

Route::get('/vendors','HomeController@show')->name('vendor.list');

Route::get('/customers','HomeController@listCustomer')->name('customer.list');

Route::post('save/customer','HomeController@createCustomer')->name('save.customer');

Route::get('/customer','HomeController@addCustomer')->name('add.customer');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


