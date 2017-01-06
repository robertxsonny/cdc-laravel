@extends('master')
  @section('content')
  <div class="row">
    <div class="col-md-12">
        @if (session('success'))
            <p class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('success') }}</p>  
      @endif
    <h1>{{ $post->title }}</h1>
    </div>
  </div>
  <div class="row">
      <p>{{ $post->description }}</p>
          
        <div class="col-xs-3 col-xs-offset-9">
            <form class="" action="{{route('post.destroy', $post->id)}}" method="post">
                <input type="hidden" name="_method" value="delete">
                {{ csrf_field() }}
                <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data');" name="name" value="Delete">
            </form>
        </div>
  </div>
  @stop