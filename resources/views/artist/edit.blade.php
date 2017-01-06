@extends('master')
@section('content')
<div class="row">
  <div class="col-md-3 col-sm-4 col-xs-12">
    <h3><strong>Edit Artist</strong></h3>
    <h3>"{{ $artist->name }}"</h3>
  </div>
  <div class="col-md-8 col-md-offset-1 col-sm-8 col-xs-12">
    @if ($errors->any())
    @foreach($errors->all() as $error)
    <p class="alert alert-danger alert-dismissible fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      {{ $error }}
    </p>
    @endforeach
    @endif
    <form enctype="multipart/form-data" class="" action="{{route('artist.update', $artist->id)}}" method="post">
      <input name="_method" type="hidden" value="PUT">
      {{csrf_field()}}
      <div class="form-group{{ ($errors->has('name')) ? $errors->first('name') : '' }}">
        <input type="text" name="name" class="form-control" placeholder="Artist name" value="{{ $artist->name }}">
        {!! $errors->first('name','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group{{ ($errors->has('genre')) ? $errors->first('genre') : '' }}">
        <input type="text" name="genre" class="form-control" placeholder="Artist genre" value="{{ $artist->genre }}">
        {!! $errors->first('genre','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group{{ ($errors->has('country')) ? $errors->first('country') : '' }}">
        <input type="text" name="country" class="form-control" placeholder="Artist country" value="{{ $artist->country }}">
        {!! $errors->first('country','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group{{ ($errors->has('picture')) ? $errors->first('picture') : '' }}">
        <label class="control-label">Change picture</label>
        <br/>
        <div class="fileinput fileinput-new" data-provides="fileinput">
          <div class="fileinput-new thumbnail" style="width: 300px; height: 200px;">
            <img src="{{ $artist->picture }}" alt="...">
          </div>
          <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 300px; max-height: 200px;"></div>
          <div>
            <span class="btn btn-default btn-file">
              <span class="fileinput-new">Select image</span>
              <span class="fileinput-exists">Change</span>
              <input type="file" name="picture">
            </span>
            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
          </div>
        </div>
        {!! $errors->first('picture','<p class="help-block">:message</p>') !!}
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" value="save">
      </div>
    </form>
  </div>
</div>
@stop
