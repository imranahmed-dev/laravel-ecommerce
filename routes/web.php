<?php

use Illuminate\Support\Facades\Route;

//Clear Cache
Route::get('clear', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('storage:link');
    return 'Cache Cleared Successfully'; //Return anything
});

/////////////////////////Frontend routes////////////////////////////////
Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('/contact', 'FrontendController@contact')->name('contact');
    Route::get('/cart', 'FrontendController@cart')->name('cart');
});

//Auth route
Auth::routes();

/////////////////////////Backend routes////////////////////////////////
Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile', 'Frontend\FrontendController@profile')->name('profile');

    Route::group(['prefix' => '/category', 'namespace' => 'Backend'], function () {

        Route::get('index', 'CategoryController@index')->name('index');
        Route::get('create', 'CategoryController@create')->name('create');
        Route::post('store', 'CategoryController@store')->name('store');
        Route::get('edit/{id}', 'CategoryController@edit')->name('edit');
        Route::post('update/{id}', 'CategoryController@update')->name('update');
        Route::get('destroy/{id}', 'CategoryController@destroy')->name('destroy');
        
    });
});
