<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Http\Requests;

// Models
use App\Album;
use App\Artist;

class AlbumController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $albums = Album::with('artist')->get();
        // return to the edit views
        return response()->json($albums, 200);
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

        $this->validate($request,[
          'name'=> 'required',
          'year' => 'required|integer|min:1970',
          'artist_id' => 'required|integer'
        ]);
        //
        $artist = Artist::findOrFail($request->artist_id);

        $album = new album;
        $album->name = $request->name;
        $album->year = $request->year;
        $album->artist_id = $request->artist_id;
        $album->save();
        
        return response()->json(['success' => 'Album created!', 'album' => $album], 200);
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
        $album = Album::with('artist')->findOrFail($id);
        // return to the edit views
        return response()->json($album, 200);
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
        $this->validate($request,[
            'name'=> 'required',
            'year' => 'required|integer|min:1970',
            'artist_id' => 'required|integer'
        ]);
        //
        $artist = Artist::findOrFail($request->artist_id);
        //
        $album = Album::findOrFail($id);
        $album->name = $request->name;
        $album->year = $request->year;
        $album->artist_id = $request->artist_id;
        $album->save();
                
        return response()->json(['success' => 'Album edited!'], 200);
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
        $album = Album::findOrFail($id);
        $album->delete();
        
        return response()->json(['success' => 'Album deleted!'], 200);
    }
}
