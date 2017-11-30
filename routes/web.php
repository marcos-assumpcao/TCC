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

    Route::get('approve/{id}', 'OrcamentoController@approve')->name('orcamentos.approve');
    Route::get('list_orcamento', 'OrcamentoController@list_orcamento')->name('orcamentos.list_orcamento'); 
    Route::get('list_orderservice', 'OrderserviceController@list_orderservice')->name('orderservices.list_orderservice'); 
    Route::get('list_user', 'UserController@list_user')->name('users.list_user');
    Route::get('aprovar/{id}/{id2}/{status}', 'OrcamentoController@aprovar')->name('orcamentos.aprovar');
    Route::get('atender/{id}/{status}', 'OrderserviceController@atender')->name('orderservices.atender');
    Route::get('senha/{id}', 'UserController@senha')->name('users.senha');
    Route::put('updatesenha/{id}', 'UserController@updatesenha')->name('users.updatesenha');

});

Route::get('/', 'HomeController@index')->name('home'); 
