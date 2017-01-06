@extends('master')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>List of blog posts</h1>
    </div>
  </div>
  <div class="row">
        @if (session('success'))
            <p class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('success') }}
            </p>  
      @endif
      <a href="{{route('post.create')}}" class="btn btn-info pull-right">Create New Data</a><br><br>
    <table class="table table-striped">
      <tr>
        <th>No.</th>
        <th>Title</th>
        <th>Created</th>
        <th>Actions</th>
      </tr>
      <?php $no=1; ?>
      @foreach($posts as $post)
        <tr>
            <td>{{$no++}}</td>
            <td><a href="{{route('post.show',$post->id)}}" class="text text-primary">{{$post->title}}</a></td>
            <td>{{$post->created_at}}</td>
            <td>
                <form class="" action="{{route('post.destroy',$post->id)}}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                    <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data');" name="name" value="delete">
                </form>
            </td>
        </tr>
      @endforeach
    </table>
  </div>
  @stop