<?php

namespace App\Http\Controllers\Api\Artist;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Http\Requests;

// Models
use App\Album;

class AlbumController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($artistId)
    {
        //
        
        $albums = Album::where('artist_id', $artistId)->get();
        // return to the edit views
        return response()->json($albums, 200);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($artistId, Request $request)
    {
        //
        $album = new album;
        $album->name = $request->name;
        $album->year = $request->year;
        $album->artist_id = $artistId;
        $album->save();
        
        return response()->json(['success' => 'Album created!', 'album' => $album], 200);
    }

    
}
