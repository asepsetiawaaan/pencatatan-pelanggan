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


Route::prefix('/customers')->group( function(){
    Route::post('/create', 'CustomersController@store')->name('customers.create');
    Route::get('/update/{name}', 'CustomersController@edit')->name('customers.edit');
    Route::post('/update/{name}', 'CustomersController@update')->name('customers.update');
    Route::get('/exsport', 'CustomersController@export')->name('customers.exsport');
    Route::delete('/delete/{name}', 'CustomersController@destroy')->name('customers.destroy');
    Route::get('/', 'CustomersController@index')->name('/customers');
});

Route::prefix('/transaksi')->group( function(){
    Route::post('/create', 'TransaksiController@store')->name('transaksi.create');
    Route::get('/update/{name}', 'TransaksiController@edit')->name('transaksi.edit');
    Route::post('/update/{name}', 'TransaksiController@update')->name('transaksi.update');
    Route::delete('/delete/{name}', 'TransaksiController@destroy')->name('transaksi.destroy');
    Route::get('/exsport', 'TransaksiController@export')->name('transaksi.exsport');
    Route::get('/', 'TransaksiController@index')->name('/transaksi');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
