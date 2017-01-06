<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    //

    protected $appends = ['artist'];

    public function album()
    {
        return $this->belongsTo('App\Album');
    }

    public function playlists()
    {
        return $this->belongsToMany('App\Playlist');
    }

    public function getArtistAttribute()
    {
        return $this->album->artist;
    }
}
