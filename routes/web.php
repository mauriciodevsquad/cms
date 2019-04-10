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
use App\Client;
use App\User;
use Illuminate\Http\Request;

Route::get('/', function () {
   return view('welcome');
});

Route::resource('/clients', 'ClientsController');

Route::resource('/requests', 'ConsultsController');

Route::get('/request-form', function () {
    return view('request-form');
});

Route::resource('/user-request-form', 'FormController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');




