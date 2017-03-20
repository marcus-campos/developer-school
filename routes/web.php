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
    return view('blank.index');
})->name('announcement');


Route::group(['prefix' => 'series', 'as' => 'series.'], function (){

    $seriesController = 'SeriesController';
    $videoController = "VideoController";

    //Series
    Route::get('/', $seriesController . '@index')->name('index');

    //Videos
    Route::get('/{series}/video', $videoController . '@index')->name('video.index');
    Route::get('/{series}/video/{id}', $videoController . '@index')->name('video.id');

});

