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


   
   
  
      
      
 
Route::group(['prefix' => 'admin',], function(){
    
    Route::get('news/index', 'Admin\YoutubeController@index')->middleware('auth');
    Route::post('news/', 'Admin\YoutubeController@create')->middleware('auth');
    Route::get('news/play', 'Admin\YoutubeController@playlists')->middleware('auth');
    Route::get('news/videos', 'Admin\YoutubeController@videos')->middleware('auth');
     Route::post('news/videos', 'Admin\YoutubeController@videos')->middleware('auth');
    Route::get('news/play2', 'Admin\YoutubeController@play2')->middleware('auth');
    Route::get('news/info', 'Admin\YoutubeController@info')->middleware('auth');
    //Route::get('news/play', 'Admin\YoutubeController@play');
    
    
    
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Admin\YoutubeController@getData');
Route::get('/home', 'Admin\YoutubeController@add')->middleware('auth');

Route::get('/2', 'Admin\YoutubeController@index2');
Route::get('/3', 'Admin\YoutubeController@index3');
Route::get('/4', 'Admin\YoutubeController@index4');
Route::get('/5', 'Admin\YoutubeController@index5');