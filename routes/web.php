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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->prefix('admin')->namespace('Auth')->group(function () {
    Route::resource('/', 'DashboardController');
    Route::resource('users', 'UserController');
    Route::resource('orderservices', 'OrderserviceController');
    Route::resource('orcamentos', 'OrcamentoController');
});

Route::get('/', 'HomeController@index')->name('home');


Route::get('auth/logout', 'Auth\AuthController@getLogout');