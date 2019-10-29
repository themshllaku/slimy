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

Route::group(['middleware'  =>  'auth', 'prefix' => 'app', 'as' => 'app.'], function () {
    Route::get('/', 'HomeController@index')->name('dashboard');

    /**
     * Routes for Users
     */
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('/', 'Core\Users\UsersController@index')->name('index');
        Route::get('/profile/{id}', 'Core\Users\UsersController@profile')->name('profile');
        Route::put('/profile/{id}', 'Core\Users\UsersController@updateProfile')->name('update-profile');
    });

    /**
     * Routes for Settings
     */
    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
        Route::get('/', 'Core\Settings\SettingsController@index')->name('index');
        Route::put('/', 'Core\Settings\SettingsController@updateGeneral')->name('update-general');
    });

    /**
     * Routes for More Settings
     */
    Route::group(['prefix' => 'more', 'as' => 'more.'], function () {
        Route::get('/currencies', 'Core\More\CurrenciesController@index')->name('currencies');
        Route::get('/currencies/create', 'Core\More\CurrenciesController@create')->name('currencies.create');
        Route::post('/currencies/store', 'Core\More\CurrenciesController@store')->name('currencies.store');
    });
});
