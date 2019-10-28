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

Route::group(['middleware'  =>  'auth', 'prefix' => 'app', 'as' => 'app.'], function() {
    Route::get('/', 'HomeController@index')->name('dashboard');

    /**
     * Routes for Settings
     */
    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function() {
        Route::get('/', 'Core\Settings\SettingsController@index')->name('index');
    });
});