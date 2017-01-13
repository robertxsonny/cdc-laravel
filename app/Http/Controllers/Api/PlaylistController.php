<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

// Models
use App\Playlist;
use App\Album;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $playlists = Playlist::all();
        // return to the edit views
        return response()->json($playlists, 200);
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
        $playlist = new playlist;
        $playlist->name = $request->name;
        $playlist->genre = $request->genre;
        $playlist->description = $request->description;
        $playlist->save();

        return response()->json(['success' => 'Playlist created!', 'playlist' => $playlist], 200);
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
        $playlist = Playlist::findOrFail($id);
        // return to the edit views
        return response()->json($playlist, 200);
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
        $playlist = Playlist::findOrFail($id);
        $playlist->name = $request->name;
        $playlist->genre = $request->genre;
        $playlist->description = $request->description;
        $playlist->save();

        return response()->json(['success' => 'Playlist edited!'], 200);
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
        $playlist = Playlist::findOrFail($id);
        $playlist->delete();

        return response()->json(['success' => 'Playlist deleted!'], 200);
    }
}
