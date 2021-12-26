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
    return view('index');
});

Route::redirect('admin/login', '/admin')->name('login');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::group(['prefix' => 'reports', 'middleware' => 'auth'], function () {
        Route::get('daily-transactions', 'Report@dailyTransaction')->name('reports_daily_transaction');
        Route::get('monthly-transactions', 'Report@monthlyTransaction')->name('reports_monthly_transaction');
    });
});
