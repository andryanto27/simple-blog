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
Route::get('/about', '\App\Http\Controllers\Frontend\HomeController@about')->name('about');
Route::get('/contact', '\App\Http\Controllers\Frontend\HomeController@contact')->name('contact');
Route::get('/portfolio', '\App\Http\Controllers\Frontend\PortfolioController@index')->name('portfolio.index');
Route::get('/portfolio/{slug}', '\App\Http\Controllers\Frontend\PortfolioController@detail')->name('portfolio.detail');
Route::get('/blog', '\App\Http\Controllers\Frontend\BlogController@index')->name('blog.index');
Route::get('/blog/{slug}', '\App\Http\Controllers\Frontend\BlogController@detail')->name('blog.detail');

// ** Backend ** //
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'dashboards'], function () {

    });
    Route::group(['prefix' => 'references'], function () {

    });
    Route::group(['prefix' => 'settings'], function () {

    });
});