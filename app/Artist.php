<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $hidden = ['created_at', 'updated_at'];
    //
    public function albums()
    {
        return $this->hasMany('App\Album');
    }
    
    public function songs()
    {
        return $this->hasManyThrough('App\Song', 'App\Album');
    }
}
