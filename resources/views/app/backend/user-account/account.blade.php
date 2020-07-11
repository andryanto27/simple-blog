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
        <form class="form-horizontal" method="POST" id="form-submit"  action="{{ route('admin.personal.account.update') }}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group has-feedback {{ $errors->has('username') ? ' has-error' : '' }}">
                    <label  class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
                        @if ($errors->has('username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label  class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group has-feedback {{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label  class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-6">
                        <input type="tel" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                        @if ($errors->has('phone'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone') }}</strong>
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