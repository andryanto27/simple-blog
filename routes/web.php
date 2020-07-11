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

// ** Authorization ** //
Auth::routes();

// ** Frontend ** //
Route::get('/', '\App\Http\Controllers\Frontend\HomeController@home')->name('welcome');
Route::get('/home', '\App\Http\Controllers\Frontend\HomeController@home')->name('home');
Route::get('/portfolio', '\App\Http\Controllers\Frontend\PortfolioController@index')->name('portfolio.index');
Route::get('/portfolio/{slug}', '\App\Http\Controllers\Frontend\PortfolioController@detail')->name('portfolio.detail');
Route::get('/blog', '\App\Http\Controllers\Frontend\BlogController@index')->name('blog.index');
Route::get('/blog/{slug}', '\App\Http\Controllers\Frontend\BlogController@detail')->name('blog.detail');



Route::group(['middleware' => ['SessionTimeout', 'XSS', 'auth']], function ($router) {
    // ** Backend ** //
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', '\App\Http\Controllers\Backend\AdminController@home')->name('admin.home');
        Route::group(['prefix' => 'personal'], function () {
            Route::get('profile', '\App\Http\Controllers\Backend\UserAccountController@profile')->name('admin.personal.profile');
            Route::get('password', '\App\Http\Controllers\Backend\UserAccountController@password')->name('admin.personal.password');
            Route::get('account', '\App\Http\Controllers\Backend\UserAccountController@account')->name('admin.personal.account');
            Route::post('account', '\App\Http\Controllers\Backend\UserAccountController@accountUpdate')->name('admin.personal.account.update');
            Route::post('profile', '\App\Http\Controllers\Backend\UserAccountController@profileUpdate')->name('admin.personal.profile.update');
            Route::post('password', '\App\Http\Controllers\Backend\UserAccountController@passwordUpdate')->name('admin.personal.password.update');
        });
        Route::group(['prefix' => 'dashboards'], function () {

        });
        Route::group(['prefix' => 'references'], function () {
            Route::resource('contacts', '\App\Http\Controllers\Backend\ContactController');
        });
        Route::group(['prefix' => 'settings'], function () {

        });
    });
});