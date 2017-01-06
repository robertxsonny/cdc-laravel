<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect()->route('post.index');
});


Route::group(['middleware' => ['auth']], function() {
    Route::resource('post','PostController');  
    Route::post('artist/{artist}/picture', 'ArtistController@picture')->name('artist.picture');
    Route::resource('artist','ArtistController');  
});

Auth::routes();

Route::get('/home', 'HomeController@index');
