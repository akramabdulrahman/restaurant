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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::group(['prefix' => 'home', 'as' => 'home.', 'middleware' => ['auth']],function(){
    Route::get('/', 'HomeController@index')->name('index');
    Route::post('/employee/complete', 'HomeController@completeEmployee')->name('complete.employee');
});

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboards', 'as' => 'dashboards.', 'middleware' => ['auth']], function () {

    Route::group(['prefix' => 'cashier', 'as' => 'cashier.'], function () {
        Route::get('/', 'CashierController@index')->name('index');
    });

    Route::group(['prefix' => 'chef', 'as' => 'chef.'], function () {
        Route::get('/', 'ChefController@index')->name('index');
    });

    Route::group(['prefix' => 'customer', 'as' => 'customer.'], function () {
        Route::get('/', 'CustomerController@index')->name('index');
    });

    Route::group(['prefix' => 'waiter', 'as' => 'waiter.'], function () {
        Route::get('/', 'CustomerController@index')->name('index');
    });

    Route::group(['prefix' => 'delivery', 'as' => 'delivery.'], function () {
        Route::get('/', 'DeliveryController@index')->name('index');
    });


});