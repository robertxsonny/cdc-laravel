@extends('master')
@section('content')
<div class="row">
  <div class="col-md-12">
    @if (session('success'))
    <p class="alert alert-success alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      {{ session('success') }}</p>
      @elseif ($errors->any())
      @foreach($errors->all() as $error)
      <p class="alert alert-danger alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ $error }}
      </p>
      @endforeach
      @endif
      <h3>{{ $artist->name }}</h3>
    </div>
  </div>

<div class="tabbable-line">
  <ul class="nav nav-tabs">
    <li role="presentation" class="active"><a aria-controls="info" role="tab" data-toggle="tab" href="#info">Basic Info</a></li>
    <li role="presentation"><a aria-controls="album" role="tab" data-toggle="tab" href="#album">Album</a></li>
    <li role="presentation"><a href="#song" aria-controls="song" role="tab" data-toggle="tab">Songs</a></li>
  </ul>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="info">
      <div class="row">
        <div class="col-xs-3">
          <div class="image-preview" style="background: url({{ $artist->picture ? $artist->picture : '/storage/artists/no_pic.png' }}) no-repeat center center; background-size: cover" ></div>
        </div>
        <div class="col-xs-8 col-xs-offset-1">
          <div class="row">
            <div class="col-xs-2">Genre</div>
            <div class="col-xs-10">{{ $artist->genre }}</div>
          </div>
          <div class="row">
            <div class="col-xs-2">Country</div>
            <div class="col-xs-10">{{ $artist->country }}</div>
          </div>
          <div class="row">
            <div class="col-xs-3 col-xs-offset-9">
              <form class="" action="{{route('artist.destroy', $artist->id)}}" method="post">
                <input type="hidden" name="_method" value="delete">
                {{ csrf_field() }}
                <a href="{{route('artist.edit',$artist->id)}}" class="btn btn-primary">Edit</a>
                <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this data');" name="name" value="Delete">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="album">
      <div class="thumbnail-row">
        <div class="col-xs-2 col-xs-offset-10">
          <a href="{{route('artist.create')}}" class="btn btn-info btn-offset">Add artist</a>
        </div>
        @foreach($artist->albums as $album)
        <div class="thumbnail-col col-md-3 col-sm-4 col-xs-6">
          <div class="thumbnail " style="background: url({{ $album->picture ? $album->picture.'?'.date('ymdHi') : '/storage/albums/no_pic.jpg' }}) no-repeat center center; background-size: cover">
            <div class="caption">
              <p>
                <strong><a href="{{route('artist.show',$artist->id)}}">{{ $album->name }}</a>
                </strong>
                <br/>
                {{$album->year}}
              </p>
              <form class=""  method="post">
                <input type="hidden" name="_method" value="delete">
                {{ csrf_field() }}
                <div class="btn-group btn-group-xs pull-right">
                  <a class="btn btn-primary btn-sm">Edit</a>
                  <input type="submit" onclick="return confirm('Are you sure to delete this data');" class="btn btn-danger btn-sm" value="Delete">
                </div>
              </form>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <div role="tabpanel" class="tab-pane" id="song">
      <h4>List of songs</h4>
    </div>
  </div>

</div>

@stop
