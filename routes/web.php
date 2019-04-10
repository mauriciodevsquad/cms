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

Route::resource('/clients', 'ClientsController');

Route::resource('/requests', 'ConsultsController');

Route::get('/request-form', function () {
    return view('request-form');
});

Route::get('/user-request-form', function () {
    return view('user-request-form');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


