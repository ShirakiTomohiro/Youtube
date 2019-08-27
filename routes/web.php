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
    Route::get('news/play2', 'Admin\YoutubeController@play2')->middleware('auth');
    Route::get('news/info', 'Admin\YoutubeController@info')->middleware('auth');
    Route::post('news/info', 'Admin\YoutubeController@info_create')->middleware('auth');
    Route::get('news/getData', 'Admin\YoutubeController@getData')->middleware('auth');
    Route::get('news/edit', 'Admin\YoutubeController@edit')->middleware('auth');
    Route::post('news/edit', 'Admin\YoutubeController@update')->middleware('auth');
   
    //Route::get('news/play', 'Admin\YoutubeController@play');
    
    
});
Auth::routes();


Route::get('/home', 'YoutubeController@index');
Route::get('/', 'YoutubeController@index');
Route::post('/posts/{post}/likes', 'LikesController@store');
Route::post('/posts/{post}/likes/{like}', 'LikesController@destroy');