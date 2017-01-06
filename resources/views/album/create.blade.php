@extends('master')
  @section('content')
  <div class="row">
    <div class="col-md-3 col-sm-4 col-xs-12">
      <h3><strong>Add Album</strong></h3>
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
      <form enctype="multipart/form-data" class="" action="{{route('album.store')}}" method="post">
        {{csrf_field()}}
        <div class="form-group{{ ($errors->has('name')) ? $errors->first('name') : '' }}">
          <input type="text" name="name" class="form-control" placeholder="Album name">
          {!! $errors->first('name','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('year')) ? $errors->first('year') : '' }}">
          <input type="text" name="genre" class="form-control" placeholder="Album year">
          {!! $errors->first('genre','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('artist_id')) ? $errors->first('artist_id') : '' }}">
          <input type="text" name="country" class="form-control" placeholder="Album country">
          {!! $errors->first('country','<p class="help-block">:message</p>') !!}
        </div>
        <div class="form-group{{ ($errors->has('picture')) ? $errors->first('picture') : '' }}">
          <label class="control-label">Change picture</label>
          <br/>
          <div class="fileinput fileinput-new" data-provides="fileinput">
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
