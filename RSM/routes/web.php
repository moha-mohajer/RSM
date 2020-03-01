<?php

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::get('/view', 'PagesController@view');

Route::resource('ticket', 'ticketController');
Route::resource('service', 'serviceController');
Route::resource('order', 'orderController');
Route::resource('device', 'deviceController');
Route::resource('item', 'itemController');
Route::resource('invoice', 'invoiceController');
Route::resource('User', 'userController');
Route::resource('brand', 'brandController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
