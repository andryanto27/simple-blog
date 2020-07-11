@extends('layouts.backend.base')
@section('title') {{ $title }} @endsection
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{ $title }}
        <small>{{ $subtitle }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">{{ $module }}</a></li>
        <li class="active">{{ $title }}</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    @include('layouts.backend.alert')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Form {{ $title }}</h3>
        </div>
        <form class="form-horizontal" method="POST" id="form-submit"  action="{{ route('admin.personal.password.update') }}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label  class="col-sm-2 control-label">Current Password</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" id="password" name="password">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group has-feedback {{ $errors->has('new_password') ? ' has-error' : '' }}">
                    <label  class="col-sm-2 control-label">New Password</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" id="new_password" name="new_password">
                        @if ($errors->has('new_password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('new_password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group has-feedback {{ $errors->has('new_password_confirmation') ? ' has-error' : '' }}">
                    <label  class="col-sm-2 control-label">Confirm New Password</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
                        @if ($errors->has('new_password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('new_password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
        </form>
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->

@endsection