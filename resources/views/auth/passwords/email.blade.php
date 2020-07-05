@extends("layouts.backend.auth")
@section('title') Reset Password @endsection
@section('content')
<!-- /.login-logo -->
<div class="login-box-body">
    <p class="login-box-msg">Forgot my password</p>
    @include('layouts.backend.alert')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('password.email') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="E-Mail Address"  required autofocus>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="row">
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">
                    Send Password Reset Link
                </button>
            </div>
        </div>
    </form>
    <h1></h1>
    <a href="{{ route('login') }}">I already have a membership</a><br>
</div>
<!-- /.login-box-body -->
@endsection