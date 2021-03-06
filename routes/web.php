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
    return view('startPage');
});

Auth::routes();

// Rotte crud utente registrato:
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('/product', 'ProductController');
Route::resource('/user', 'UserController');

Route::get('products/img/{product}/edit', 'ProductController@editImg')->name('products.editImg');
Route::put('products/img/{product}', 'ProductController@updateImg')->name('products.updateImg');

Route::get('users/img/{user}/edit', 'UserController@editImg')->name('users.editImg');
Route::put('users/img/{user}', 'UserController@updateImg')->name('users.updateImg');
