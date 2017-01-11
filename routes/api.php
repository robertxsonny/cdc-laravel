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

Route::group(['middleware' => ['auth:api']], function()
{
  Route::resource('artist','Api\ArtistController', ['except' => [ 'create', 'edit' ]]);
  Route::resource('artist.picture','Api\ArtistPictureController', ['only' => [ 'store' ]]);
  Route::resource('artist.album','Api\ArtistAlbumController', ['only' => [ 'index', 'store' ]]);

  Route::resource('album','Api\AlbumController', ['except' => [ 'create', 'edit' ]]);
  Route::resource('album.picture','Api\AlbumPictureController', ['only' => [ 'store' ]]);
  Route::resource('album.song','Api\AlbumSongController', ['only' => [ 'index', 'store' ]]);

  Route::resource('song','Api\SongController', ['except' => [ 'create', 'edit' ]]);

  Route::resource('playlist','Api\PlaylistController', ['except' => [ 'create', 'edit' ]]);
  Route::resource('playlist.picture','Api\PlaylistPictureController', ['only' => [ 'store' ]]);
  Route::resource('playlist.song','Api\PlaylistSongController', ['only' => [ 'index', 'store', 'destroy' ]]);

  Route::get('/user', function (Request $request)
  {
    return $request->user();
  });

  Route::post('/logout','Api\ApiAuthController@logout')->name('api.logout');
});

Route::group(['middleware' => ['guest:api']], function() {
  Route::post('/login','Api\ApiAuthController@login')->name('api.login');
  Route::post('/register','Api\ApiAuthController@register')->name('api.register');
});
