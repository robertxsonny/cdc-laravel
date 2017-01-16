<?php

namespace App\Http\Controllers\Api\Artist;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Http\Requests;

// Models
use App\Artist;

class PictureController extends ApiController
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($artistid, Request $request)
    {
        //
        $artist = Artist::findOrFail($artistid);
        
        $this->validate($request, [
            'picture' => 'required|max:10000|mimes:jpg,jpeg,gif,png',
        ]);
        
        $extension = $request->picture->extension();
        
        if (isset($artist->picture))
            \Storage::delete(str_replace('/storage/', '', $artist->picture));
        
        $path = $request->file('picture')->storeAs('artists', $artistid.'.'.$extension);
                
        $artist->picture = '/storage/'.$path;
        $artist->save();
                
        return response()->json(['success' => 'Picture added!'], 200);
    }

}
