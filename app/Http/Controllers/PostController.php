<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return IlluminateHttpResponse
     */
    public function index()
    {
        //show data
        $posts =  Post::orderBy('id')->get();
        return view('post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return IlluminateHttpResponse
     */
    public function create()
    {
        //create new data
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  IlluminateHttpRequest  $request
     * @return IlluminateHttpResponse
     */
    public function store(Request $request)
    {
        // validation
        $this->validate($request,[
            'title'=> 'required',
            'description' => 'required',
        ]);
      
        // create new data
        $post = new post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        
        return redirect()->route('post.show', $post->id)->with('success','Post Created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return IlluminateHttpResponse
     */
    public function show($id)
    {
        //
        $post = Post::findOrFail($id);
        // return to the edit views
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return IlluminateHttpResponse
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        // return to the edit views
        return view('post.edit', compact('post'));
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
        // validation
        $this->validate($request,[
          'title'=> 'required',
          'description' => 'required',
      ]);

        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('post.show', $post->id)->with('success','Post Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return IlluminateHttpResponse
     */
    public function destroy($id)
    {
        // delete data
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('post.index')->with('success','Post Deleted!!');
    }
}