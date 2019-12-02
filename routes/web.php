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
    return view('/welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//customer
Route::get('/manage_customer', 'CustomerController@index')->name('manage_customer');
Route::get('/add_customer', 'CustomerController@create')->name('add_customer');
Route::post('/store', 'CustomerController@store')->name('store');
Route::get('/edit_customer/{customer}', 'CustomerController@edit')->name('edit_customer');
Route::patch('/update/{customer}', 'CustomerController@update')->name('update');
Route::get('delete_customer/{customer}', 'CustomerController@destroy')->name('delete_customer');

//item
Route::get('/manage_items', 'ItemController@index')->name('manage_items');
Route::get('/add_item', 'ItemController@create')->name('add_item');
Route::post('/save', 'ItemController@store')->name('save');
Route::get('/request_purchase/{item}', 'OrderController@show')->name('request_purchase');
Route::patch('/update_purchase/{item}', 'OrderController@store')->name('update_purchase');
Route::get('/create_invoice', 'ItemController@billing')->name('create_invoice');
Route::get('/dashboard', 'ItemController@dashboard')->name('dashboard');

///order
Route::get('/view_order', 'OrderController@index')->name('view_order');
Route::get('/confirm_order/{item}', 'OrderController@update')->name('confirm_order');


Route::get('/invoice', 'ItemController@get_invoice')->name('invoice');


