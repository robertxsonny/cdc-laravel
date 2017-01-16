<?php

namespace App\Http\Controllers\Api\Album;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Http\Requests;

// Models
use App\Album;

class PictureController extends ApiController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($albumId, Request $request)
    {
        //
        $album = Album::find($albumId);
        
        $this->validate($request, [
            'picture' => 'required|max:10000|mimes:jpg,jpeg,gif,png',
        ]);
        
        $extension = $request->picture->extension();
        
        $path = $request->file('picture')->storeAs('album', $albumId.'.'.$extension);
                
        $album->picture = '/storage/'.$path;
        $album->save();
                
        return response()->json(['success' => 'Picture added!'], 200);
    }

}
