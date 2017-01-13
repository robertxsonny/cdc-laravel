<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Authenticated Parts
Route::group(['middleware' => ['auth:api']], function()
{
    Route::resource('artist','Api\ArtistController', ['except' => [ 'create', 'edit' ]]);
    Route::resource('artist.picture','Api\Artist\PictureController', ['only' => [ 'store' ]]);
    Route::resource('artist.album','Api\Artist\AlbumController', ['only' => [ 'index', 'store' ]]);

    Route::resource('album','Api\AlbumController', ['except' => [ 'create', 'edit' ]]);
    Route::resource('album.picture','Api\Album\PictureController', ['only' => [ 'store' ]]);
    Route::resource('album.song','Api\Album\SongController', ['only' => [ 'index', 'store' ]]);

    Route::resource('song','Api\SongController', ['except' => [ 'create', 'edit' ]]);

    Route::resource('playlist','Api\PlaylistController', ['except' => [ 'create', 'edit' ]]);
    Route::resource('playlist.picture','Api\Playlist\PictureController', ['only' => [ 'store' ]]);
    Route::resource('playlist.song','Api\Playlist\SongController', ['only' => [ 'index', 'store', 'destroy' ]]);

    Route::get('/user', function (Request $request)
    {
        return $request->user();
    });

    Route::post('/logout','Api\AuthController@logout')->name('api.logout');
});


// Non Authenticated Parts
Route::group(['middleware' => ['guest:api']], function() {
    Route::post('/login','Api\AuthController@login')->name('api.login');
    Route::post('/register','Api\AuthController@register')->name('api.register');
});
