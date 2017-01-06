@extends('auth')

@section('content')
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body" style="margin: 10px;">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Username" required autofocus>                                        
                            </div>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required >                                        
                            </div>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" name="password" placeholder="Password" required>                                        
                            </div>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
                                <input type="password" class="form-control" name="password-confirmation" placeholder="Confirm password" required >                                        
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">
                                    Register
                            </button>
                        </div>
                        
                        <div class="form-group">
                            <h5>Already have an account?</h5>
                                <a href="/login" class="btn btn-block btn-default">
                                    Login
                                </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
