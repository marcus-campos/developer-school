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
    return view('announcement.index');
})->name('announcement');

Route::get('subscription', function () {
    return view('subscription.index');
})->name('subscription');


Route::group(['prefix' => 'series', 'as' => 'series.'], function (){

    $seriesController = 'SeriesController';


    //Series
    Route::get('/', $seriesController . '@index')->name('index');

    Route::group(['prefix' => '{series}/video', 'middleware' => 'premium.videos' , 'as' => 'video.'], function () {
        $videoController = "VideoController";
        //Videos
        Route::get('/', $videoController . '@index')->name('index');
        Route::get('{id}', $videoController . '@show')->name('id');
    });

});

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function (){
    $loginController = 'Auth\LoginController';
    $registerController = 'Auth\RegisterController';

    // Login Routes
    Route::get('login', $loginController . '@showLoginForm')->name('login.form');
    Route::post('login', $loginController . '@login')->name('login');
    Route::get('logout', $loginController . '@logout')->name('logout');
    // Registration Routes
    Route::get('register', $registerController . '@showRegistrationForm')->name('register.form');
    Route::post('register', $registerController . '@register')->name('register');
});

Route::group(['prefix' => 'password', 'as' => 'password.'], function (){
    $forgotPassword = 'Auth\ForgotPasswordController';

    // Password Reset Routes...
    Route::get('reset', $forgotPassword . '@showLinkRequestForm');
    Route::post('email', $forgotPassword . '@sendResetLinkEmail');
    Route::group(['prefix' => 'reset', 'as' => 'reset.'], function () {
        $resetPassword = 'Auth\ResetPasswordController';

        Route::post('/', $resetPassword .'@reset');
        Route::get('reset/{token}', $resetPassword . '@showResetForm');
    });
});