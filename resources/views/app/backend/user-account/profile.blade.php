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
        <form class="form-horizontal" method="POST" id="form-submit"  action="{{ route('admin.personal.profile.update') }}">
            {{ csrf_field() }}
            <div class="box-body">

                <div class="form-group">
                    <label  class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $profile->first_name }}">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $profile->last_name }}">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Gender</label>
                    <div class="col-sm-6 no-padding">
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="0" class="i-radio" {{ (int)$profile->gender == 0 ? "checked" : "" }}>&nbsp; Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="1" class="i-radio" {{ (int)$profile->gender == 1 ? "checked" : "" }}>&nbsp; Male
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Blood Type</label>
                    <div class="col-sm-6">
                        <select name="blood_type" id="blood_type" class="select2">
                            <option>-- Select an item --</option>
                            @foreach(array_values($bloods) as $i => $value)
                                <option value="{{ $i }}" {{ (int) $i == $profile->blood_type ? 'selected' : ''  }} >{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Marital Status</label>
                    <div class="col-sm-6">
                        <select name="marital_status" id="marital_status" class="select2">
                            <option>-- Select an item --</option>
                            @foreach(array_values($maritals) as $i => $value)
                                <option value="{{ $i }}" {{ (int) $i == $profile->marital_status ? 'selected' : ''  }} >{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Postal Code</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ $profile->postal_code }}">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Fax Number</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="fax_number" name="fax_number" value="{{ $profile->fax_number }}">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Birth Place</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="birth_place" name="birth_place" value="{{ $profile->birth_place }}">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Birth Date</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control date-picker" id="birth_date" name="birth_date" value="{{ $profile->birth_date }}">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Nationality</label>
                    <div class="col-sm-6">
                        <select name="country_id" id="country_id" class="select2">
                            <option>-- Select an item --</option>
                            @foreach($countries as $c)
                                <option value="{{ $c->id }}" {{ (int) $c->id == $profile->country_id ? 'selected' : ''  }} >{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-6">
                       <textarea rows="5" id="address" name="address" class="form-control">{{ $profile->address }}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">About Me</label>
                    <div class="col-sm-6">
                       <textarea rows="5" id="about_me" name="about_me" class="form-control">{{ $profile->about_me }}</textarea>
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