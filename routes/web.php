<?php

use Illuminate\Support\Facades\Route;

//Clear Cache
Route::get('clear', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('storage:link');
    return 'DONE'; //Return anything
});

/////////////////////////Frontend routes////////////////////////////////
Route::group(['namespace'=>'Frontend'], function(){
    
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('/contact', 'FrontendController@contact')->name('contact');
    
});
//Auth route
Auth::routes();

/////////////////////////Backend routes////////////////////////////////

Route::group(['middleware'=>['auth']], function(){
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile', 'Frontend\FrontendController@profile')->name('profile');
    
});