<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

// Models
use App\Song;
use App\Album;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $songs = Song::with('album.artist')->get();
        // return to the edit views
        return response()->json($songs, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request,[
          'name'=> 'required',
          'file' => 'required|max:20000|mimes:mp3,mpga,m4a,mp4a',
          'album_id' => 'required|integer'
        ]);

        $album = Album::findOrFail($request->album_id);

        $song = new song;
        $song->name = $request->name;
        $song->album_id = $request->album_id;
        // $song->artist_id = Album::findOrFail($request->album_id)->artist_id;
        $song->save();

        $path = $request->file('file')->store('songs');
                
        $song->url = '/storage/'.$path;
        $song->save();

        return response()->json(['success' => 'Song created!', 'song' => $song], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $song = Song::findOrFail($id);
        // return to the edit views
        return response()->json($song, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $song = Song::findOrFail($id);
        $song->name = $request->name;
        $song->url = $request->url;
        $song->album_id = $request->album_id;
        // $song->artist_id = Album::findOrFail($request->album_id)->artist_id;
        $song->save();
                
        return response()->json(['success' => 'Song edited!'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $song = Song::findOrFail($id);
        $song->delete();
        
        return response()->json(['success' => 'Song deleted!'], 200);
    }
}
