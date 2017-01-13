<?php

namespace App\Http\Controllers\Api\Album;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

// Models
use App\Album;
use App\Song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($albumId)
    {
        //

        $songs = Song::where('album_id', $albumId)->get();
        // return to the edit views
        return response()->json($songs, 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($albumId, Request $request)
    {
        //

        $this->validate($request,[
          'name' => 'required',
          'file' => 'required|max:20000|mimes:mp3,mpga,m4a,mp4a'
        ]);

        $album = Album::findOrFail($albumId);

        $path = $request->file('file')->store('songs');

        $song = new song;
        $song->name = $request->name;
        $song->album_id = $albumId;
        $song->url = '/storage/'.$path;
        // $song->artist_id = Album::findOrFail($request->album_id)->artist_id;
        $song->save();

        return response()->json(['success' => 'Song created!', 'song' => $song], 200);
    }


}
