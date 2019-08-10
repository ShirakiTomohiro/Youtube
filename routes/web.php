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


   
   
  
      
      
 
Route::group(['prefix' => 'admin'], function(){
    Route::get('news/index', 'Admin\YoutubeController@index');
    Route::post('news/create', 'Admin\YoutubeController@create');
    Route::get('news/play/', 'Admin\YoutubeController@playlists');
    Route::get('news/videos', 'Admin\YoutubeController@videos');
    Route::get('news/play2', 'Admin\YoutubeController@play2');
    Route::get('news/play3', 'Admin\YoutubeController@play3');
    Route::get('news/play4/{channel_id}/{id}', 'Admin\YoutubeController@play4');
    Route::get('news/play5', 'Admin\YoutubeController@play5');
    Route::get('news/play6', 'Admin\YoutubeController@play6');
    Route::get('news/play7', 'Admin\YoutubeController@play7');
    Route::get('news/play8', 'Admin\YoutubeController@play8');
    Route::get('news/play9', 'Admin\YoutubeController@play9');
    Route::get('news/play10', 'Admin\YoutubeController@play10');
    Route::get('news/play11', 'Admin\YoutubeController@play11');
    Route::get('news/play12', 'Admin\YoutubeController@play12');
    Route::get('news/play13', 'Admin\YoutubeController@play13');
    Route::get('news/play14', 'Admin\YoutubeController@play14');
    Route::get('news/play15', 'Admin\YoutubeController@play15');
    Route::get('news/play16', 'Admin\YoutubeController@play16');
    Route::get('news/play17', 'Admin\YoutubeController@play17');
    Route::get('news/play18', 'Admin\YoutubeController@play18');
    Route::get('news/play19', 'Admin\YoutubeController@play19');
    
    
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'Admin\YoutubeController@getData');
Route::get('/2', 'Admin\YoutubeController@index2');
Route::get('/3', 'Admin\YoutubeController@index3');
Route::get('/4', 'Admin\YoutubeController@index4');
Route::get('/5', 'Admin\YoutubeController@index5');