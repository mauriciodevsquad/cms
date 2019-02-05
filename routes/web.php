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

Route::get('/account', 'DashboardController@account')->name('account');
Route::get('/bookings', 'DashboardController@bookings')->name('bookings');
Route::get('/clients', 'DashboardController@clients')->name('clients');
Route::get('/forgot', 'DashboardController@forgot')->name('forgot');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/register', 'DashboardController@register')->name('register');
Route::get('/request-form', 'DashboardController@requestForm')->name('request-form');
Route::get('/requests', 'DashboardController@requests')->name('requests');
Route::get('/settings', 'DashboardController@settings')->name('settings');

Route::resource('clients', 'ClientsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
