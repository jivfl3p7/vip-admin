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
Route::get('login', 'AuthController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('admins_simple', 'ConfirmationsController@generateAdminsSimple')->middleware(['daemon'])->name('admins-simple');
Route::get('create-confirmation/{public_id}', 'ConfirmationsController@createConfirmation')->middleware(['auth', 'daemon'])->name('create-confirmation');


Route::get('orders', 'OrdersController@view')->middleware('auth')->name('orders');


Route::get('daemon-login', 'DaemonController@login')->middleware('daemon.online')->name('daemon-login');
Route::post('daemon-login', 'DaemonController@loginPost')->middleware('daemon.online')->name('daemon-login-post');


Route::get('view-steam-order/{public_id}', 'SteamOrderController@viewSteamOrder')->middleware(['auth', 'daemon'])->name('view-steam-order');
Route::get('send-trade-order/{public_id}', 'SteamOrderController@sendTradeOrder')->middleware(['auth', 'daemon'])->name('send-trade-order');
Route::get('create-steam-offer', 'SteamOrderController@createSteamOffer')->middleware(['auth', 'daemon']);
Route::get('inventory', 'SteamOrderController@inventoryView')->middleware(['auth','tradelink', 'daemon'])->name('inventory');


Route::get('/', 'UserController@home')->middleware('auth')->name('home');
Route::get('settings', 'UserController@settings')->middleware('auth')->name('settings');
Route::post('settings', 'UserController@settingsUpdate')->middleware('auth')->name('settings.update');