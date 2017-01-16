<?php

namespace App\Http\Controllers\Api\Playlist;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Http\Requests;

// Models
use App\Playlist;

class PictureController extends ApiController
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
