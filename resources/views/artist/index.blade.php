@extends('master')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h3><strong>List of popular artist/musician</strong></h3>
    </div>
  </div>
  <div class="row">
      <div class="col-xs-12">
        @if (session('success'))
            <p class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('success') }}
            </p>
        @endif
      </div>
  </div>
  <div class="thumbnail-row">
      <div class="col-xs-2 col-xs-offset-10">
        <a href="{{route('artist.create')}}" style="margin-bottom: 10px" class="btn btn-info btn-block">Add artist</a>
      </div>
      @foreach($artists as $artist)
      <div class="thumbnail-col col-md-3 col-sm-4 col-xs-6">
        <div class="thumbnail " style="background: url({{ $artist->picture ? $artist->picture.'?'.date('ymdHi') : '/storage/artists/no_pic.png' }}) no-repeat center center; background-size: cover">
                <div class="caption">
                    <p>
                        <strong><a href="{{route('artist.show',$artist->id)}}">{{ $artist->name }}</a>
                        </strong>
                        <br/>
                        {{$artist->genre}}
                    </p>
                    <form class="" action="{{route('artist.destroy',$artist->id)}}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        {{ csrf_field() }}
                        <div class="btn-group btn-group-xs pull-right">
                            <a href="{{route('artist.edit',$artist->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <input type="submit" onclick="return confirm('Are you sure to delete this data');" class="btn btn-danger btn-sm" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
      @endforeach


  </div>
  @stop
