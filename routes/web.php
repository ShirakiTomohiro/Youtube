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

Route::group(['prefix' => 'admin'], function(){
    Route::get('news/create', 'Admin\YoutubeController@add')->middleware('auth');
    Route::get('news/play', 'Admin\YoutubeController@playlists')->middleware('auth');
    Route::get('news/videos', 'Admin\YoutubeController@videos')->middleware('auth');
    Route::get('news/index', 'Admin\YoutubeController@index')->middleware('auth');
    Route::get('news/play2', 'Admin\YoutubeController@play2')->middleware('auth');
    Route::get('news/play3', 'Admin\YoutubeController@play3')->middleware('auth');
    Route::get('news/play4', 'Admin\YoutubeController@play4')->middleware('auth');
    Route::get('news/play5', 'Admin\YoutubeController@play5')->middleware('auth');
    Route::get('news/play6', 'Admin\YoutubeController@play6')->middleware('auth');
    Route::get('news/play7', 'Admin\YoutubeController@play7')->middleware('auth');
    Route::get('news/play8', 'Admin\YoutubeController@play8')->middleware('auth');
    Route::get('news/play9', 'Admin\YoutubeController@play9')->middleware('auth');
    Route::get('news/play10', 'Admin\YoutubeController@play10')->middleware('auth');
    Route::get('news/play11', 'Admin\YoutubeController@play11')->middleware('auth');
    Route::get('news/play12', 'Admin\YoutubeController@play12')->middleware('auth');
    Route::get('news/play13', 'Admin\YoutubeController@play13')->middleware('auth');
    Route::get('news/play14', 'Admin\YoutubeController@play14')->middleware('auth');
    Route::get('news/play15', 'Admin\YoutubeController@play15')->middleware('auth');
    Route::get('news/play16', 'Admin\YoutubeController@play16')->middleware('auth');
    Route::get('news/play17', 'Admin\YoutubeController@play17')->middleware('auth');
    Route::get('news/play18', 'Admin\YoutubeController@play18')->middleware('auth');
    Route::get('news/play19', 'Admin\YoutubeController@play19')->middleware('auth');
    Route::get('news/kk', 'Admin\YoutubeController@kk');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
