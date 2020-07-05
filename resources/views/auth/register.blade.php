@extends("layouts.backend.auth")
@section('title') Register @endsection
@section('content')
<!-- /.login-logo -->
<div class="login-box-body">
    <p class="login-box-msg">Register a new membership</p>
    @include('layouts.backend.alert')
    <form action="{{ route('register') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group has-feedback {{ $errors->has('username') ? ' has-error' : '' }}">
            <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" placeholder="Username"  required autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @if ($errors->has('username'))
                <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="E-Mail Address" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>

        <div class="row">
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">
                    Register
                </button>
            </div>
        </div>
        
    </form>
    <h1></h1>
    <a href="{{ route('login') }}">I already have a membership</a><br>
</div>
<!-- /.login-box-body -->
@endsection