@extends('backend::layouts.main')
@section('page_title')
Update thông tin
@endsection
@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
    <li class="active">Update thông tin</li>
</ul>
@endsection
@section('content')
    <h1>Update thông tin cơ bản.</h1>
    <div class="sp-push-form">
        <form action="{{ route('backend.thongtin.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{--<input type="hidden" name="_method" value="PUT"/>--}}

            <div class="form-group  @if (count($errors->all())) {{$errors->has(['tencongty']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Tên công ty<span class="required">*</span></label>
                <input class="form-control{{ $errors->has('tencongty') ? ' has-error' : '' }}" name="tencongty" type="text" value="{{ $info->tencongty }}">
                <div class="help-block">@if($errors->has('tencongty')) {{ $errors->first('tencongty') }} @endif</div>
            </div>

            <div class="form-group  @if (count($errors->all())) {{$errors->has(['emailcongty']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Email công ty<span class="required">*</span></label>
                <input class="form-control{{ $errors->has('emailcongty') ? ' has-error' : '' }}" name="emailcongty" type="text" value="{{ $info->emailcongty }}">
                <div class="help-block">@if($errors->has('emailcongty')) {{ $errors->first('emailcongty') }} @endif</div>
            </div>

            <div class="form-group  @if (count($errors->all())) {{$errors->has(['truso']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Địa chỉ trụ sở<span class="required">*</span></label>
                <input class="form-control{{ $errors->has('truso') ? ' has-error' : '' }}" name="truso" type="text" value="{{ $info->truso }}">
                <div class="help-block">@if($errors->has('truso')) {{ $errors->first('truso') }} @endif</div>
            </div>

            <div class="form-group  @if (count($errors->all())) {{$errors->has(['tel1']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">SDT thứ nhất<span class="required">*</span></label>
                <input class="form-control{{ $errors->has('tel1') ? ' has-error' : '' }}" name="tel1" type="text" value="{{ $info->tel1 }}">
                <div class="help-block">@if($errors->has('tel1')) {{ $errors->first('tel1') }} @endif</div>
            </div>

            <div class="form-group  @if (count($errors->all())) {{$errors->has(['tel2']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">SDT thứ hai</label>
                <input class="form-control{{ $errors->has('tel2') ? ' has-error' : '' }}" name="tel2" type="text" value="{{ $info->tel2 }}">
                <div class="help-block">@if($errors->has('tel2')) {{ $errors->first('tel2') }} @endif</div>
            </div>

            <div class="form-group  @if (count($errors->all())) {{$errors->has(['facebook']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Facebook</label>
                <input class="form-control{{ $errors->has('facebook') ? ' has-error' : '' }}" name="facebook" type="text" value="{{ $info->facebook }}">
                <div class="help-block">@if($errors->has('facebook')) {{ $errors->first('facebook') }} @endif</div>
            </div>

            <div class="form-group  @if (count($errors->all())) {{$errors->has(['youtube']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Youtube</label>
                <input class="form-control{{ $errors->has('youtube') ? ' has-error' : '' }}" name="youtube" type="text" value="{{ $info->youtube }}">
                <div class="help-block">@if($errors->has('youtube')) {{ $errors->first('youtube') }} @endif</div>
            </div>

            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

@endsection

@push('scripts')
    <link rel="stylesheet" href="<?php echo asset('backend/bower_components/bootstrap-fileinput/css/fileinput.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('backend/bower_components/bootstrap-fileinput/css/fileinput-rtl.css')?>" type="text/css">
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/plugins/piexif.js') !!}"></script>
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/fileinput.js') !!}"></script>
@endpush
