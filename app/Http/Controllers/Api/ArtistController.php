<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Http\Requests;

// Models
use App\Artist;

class ArtistController extends ApiController
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //

    $artists = Artist::all();
    // return to the edit views
    return response()->json($artists, 200);
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
      'genre' => 'required',
      'country' => 'required'
    ]);

    $artist = new artist;
    $artist->name = $request->name;
    $artist->country = $request->country;
    $artist->genre = $request->genre;
    $artist->save();

    // if (isset($request->picture))
    // {
    //   try {
    //     $extension = $request->picture->extension();
    //     $path = $request->file('picture')->storeAs('artists', $artist->id.'.'.$extension);
    //     $artist->picture = '/storage/'.$path;
    //     $artist->save();
    //   }
    //   catch (Exception $e) {
    //     continue;
    //   }
    // }

    return response()->json(['success' => 'Artist created!', 'artist' => $artist], 200);
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
    $artist = Artist::findOrFail($id);
    // return to the edit views
    return response()->json($artist, 200);
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
    //dd($request->all());

    $this->validate($request,[
      'name'=> 'required',
      'genre' => 'required',
      'country' => 'required'
    ]);

    $artist = Artist::findOrFail($id);
    $artist->name = $request->name;
    $artist->country = $request->country;
    $artist->genre = $request->genre;

    // if (isset($request->picture))
    // {
    //   try {
    //     if (isset($artist->picture))
    //       \Storage::delete(str_replace('/storage/', '', $artist->picture));
    //     $extension = $request->picture->extension();
    //     $path = $request->file('picture')->storeAs('artists', $id.'.'.$extension);
    //     $artist->picture = '/storage/'.$path;
    //   }
    //   catch (Exception $e) {
    //     continue;
    //   }
    // }

    $artist->save();

    return response()->json(['success' => 'Artist edited!'], 200);
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
    $artist = Artist::findOrFail($id);
    $artist->delete();

    return response()->json(['success' => 'Artist deleted!'], 200);
  }


}
