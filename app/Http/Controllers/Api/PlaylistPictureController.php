<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Playlist;

class PlaylistPictureController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($playlistId, Request $request)
    {
        //
        $playlist = Playlist::findOrFail($playlistId);

        $this->validate($request, [
            'picture' => 'required|max:10000|mimes:jpg,jpeg,gif,png',
        ]);

        $extension = $request->picture->extension();

        $path = $request->file('picture')->storeAs('playlist', $playlistId.'.'.$extension);

        $playlist->picture = '/storage/'.$path;
        $playlist->save();

        return response()->json(['success' => 'Picture added!'], 200);
    }

}
