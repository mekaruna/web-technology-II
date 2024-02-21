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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'HomeController@index')->name('home.index');
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers\Admin'
], function () {
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::resource('dishes', 'DishController');
    Route::resource('banners', 'BannerController');
    Route::resource('chefs', 'ChefController');
    Route::resource('events', 'EventController');
    Route::resource('testimonials', 'TestimonialController');
});
