<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Artist;
use App\Album;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return IlluminateHttpResponse
     */
    public function index(Request $request)
    {
        //show data
        $request->headers->set('Accept', 'application/json');
        $request->headers->set('Authorization', 'Bearer '.$this->getToken($request));
        $api =  Request::create('/api/artist', 'GET', $request->all());
        $response = \Route::dispatch($api);
        $artists = $response->getData();
        
        return view('artist.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return IlluminateHttpResponse
     */
    public function create()
    {
        //create new data
        return view('artist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  IlluminateHttpRequest  $request
     * @return IlluminateHttpResponse
     */
    public function store(Request $request)
    {
        $request->flash();
        
        // create new data
        $request->headers->set('Accept', 'application/json');
        $request->headers->set('Authorization', 'Bearer '.$this->getToken($request));
        $api = Request::create('/api/artist', 'POST', $request->all());
        $response = \Route::dispatch($api);
        $data = $response->getData();
        
        if (isset($data->success))
            return redirect()->route('artist.show', $data->artist->id)->with('success','Artist Created!');
        else
            return redirect()->route('artist.create')->withErrors($data)->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return IlluminateHttpResponse
     */
    public function show($id, Request $request)
    {
        //
        $request->headers->set('Accept', 'application/json');
        $request->headers->set('Authorization', 'Bearer '.$this->getToken($request));
        $api = Request::create('/api/artist/'.$id, 'GET', $request->all());
        $response = \Route::dispatch($api);
        $artist = $response->getData();
        
        
        $api2 = Request::create('/api/artist/'.$id.'/album', 'GET', $request->all());
        $response2 = \Route::dispatch($api2);
        $artist->albums = $response2->getData();
        
        // return to the edit views
        return view('artist.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return IlluminateHttpResponse
     */
    public function edit($id, Request $request)
    {
        $request->headers->set('Accept', 'application/json');
        $request->headers->set('Authorization', 'Bearer '.$this->getToken($request));
        $api =  Request::create('/api/artist/'.$id, 'GET', $request->all());
        $response = \Route::dispatch($api);
        $artist = $response->getData();
        
        // return to the edit views
        return view('artist.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  IlluminateHttpRequest  $request
     * @param  int  $id
     * @return IlluminateHttpResponse
     */
    public function update(Request $request, $id)
    {
        $request->flash();
                
        // create new data
        $request->headers->set('Accept', 'application/json');
        $request->headers->set('Authorization', 'Bearer '.$this->getToken($request));
        $api = Request::create('/api/artist/'.$id, 'PUT', $request->all());
        $response = \Route::dispatch($api);
        $data = $response->getData();
        
        if (isset($data->success))
            return redirect()->route('artist.show', $id)->with('success','Artist Edited!');
        else
            return redirect()->route('artist.edit', $id)->with('errors', $data)->withInput();

    }
    
    /**
     * Upload picture.
     *
     * @param  IlluminateHttpRequest  $request
     * @param  int  $id
     * @return IlluminateHttpResponse
     */
    public function picture(Request $request, $id)
    {        
        // create new data
        $request->headers->set('Content-Type', 'multipart/form-data');
        $request->headers->set('Accept', 'application/json');
        $request->headers->set('Authorization', 'Bearer '.$this->getToken($request));
        $api = Request::create('/api/artist/'.$id.'/picture', 'POST', $request->all());
        $response = \Route::dispatch($api);
        $data = $response->getData();
        
        if (isset($data->success))
            return redirect()->route('artist.show', $id)->with('success','Picture uploaded!');
        else
            return redirect()->route('artist.show', $id)->with('errors', $data);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return IlluminateHttpResponse
     */
    public function destroy($id, Request $request)
    {
        
        $request->headers->set('Accept', 'application/json');
        $request->headers->set('Authorization', 'Bearer '.$this->getToken($request));
        $api = Request::create('/api/artist/'.$id, 'DELETE', $request->all());
        $response = \Route::dispatch($api);
        $data = $response->getData();
        
        if (isset($data->success))
            return redirect()->route('artist.index')->with('success','Artist Deleted!');
        else
            return redirect()->route('artist.index', ['errors' => $data]);
        
    }
    
    private function getToken(Request $request)
    {
        if (!$request->session()->has('access_token'))
        {
            $user = Auth::user();
            $token = $user->createToken('Token Name')->accessToken;
            $request->session()->put('access_token', $token);
        }
        
        return $request->session()->get('access_token');
    }
}