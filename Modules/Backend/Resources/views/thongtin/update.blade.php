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

            <div class="form-group  @if (count($errors->all())) {{$errors->has(['tencongty_en']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Tên công ty - English<span class="required">*</span></label>
                <input class="form-control{{ $errors->has('tencongty_en') ? ' has-error' : '' }}" name="tencongty_en" type="text" value="{{ $info->tencongty_en }}">
                <div class="help-block">@if($errors->has('tencongty_en')) {{ $errors->first('tencongty_en') }} @endif</div>
            </div>

            <div class="form-group  @if (count($errors->all())) {{$errors->has(['emailcongty']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Email công ty<span class="required">*</span></label>
                <input class="form-control{{ $errors->has('emailcongty') ? ' has-error' : '' }}" name="emailcongty" type="text" value="{{ $info->emailcongty }}">
                <div class="help-block">@if($errors->has('emailcongty')) {{ $errors->first('emailcongty') }} @endif</div>
            </div>

            <div class="form-group  @if (count($errors->all())) {{$errors->has(['emailcongty2']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Email công ty 2</label>
                <input class="form-control{{ $errors->has('emailcongty2') ? ' has-error' : '' }}" name="emailcongty2" type="text" value="{{ $info->emailcongty2 }}">
                <div class="help-block">@if($errors->has('emailcongty2')) {{ $errors->first('emailcongty2') }} @endif</div>
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

            ------------------------------------------------

            <div class="form-group  @if (count($errors->all())) {{$errors->has(['truso2']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Địa chỉ trụ sở cở sở 2<span class="required">*</span></label>
                <input class="form-control{{ $errors->has('truso2') ? ' has-error' : '' }}" name="truso2" type="text" value="{{ $info->truso2 }}">
                <div class="help-block">@if($errors->has('truso2')) {{ $errors->first('truso2') }} @endif</div>
            </div>

            <div class="form-group  @if (count($errors->all())) {{$errors->has(['tel3']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Số điện thoại thứ nhất của cơ sở 2<span class="required">*</span></label>
                <input class="form-control{{ $errors->has('tel3') ? ' has-error' : '' }}" name="tel3" type="text" value="{{ $info->tel3 }}">
                <div class="help-block">@if($errors->has('tel3')) {{ $errors->first('tel3') }} @endif</div>
            </div>

            <div class="form-group  @if (count($errors->all())) {{$errors->has(['tel4']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Số điện thoại thứ hai của cơ sở 2</label>
                <input class="form-control{{ $errors->has('tel4') ? ' has-error' : '' }}" name="tel4" type="text" value="{{ $info->tel4 }}">
                <div class="help-block">@if($errors->has('tel4')) {{ $errors->first('tel4') }} @endif</div>
            </div>

            <div class="form-group  @if (count($errors->all())) {{$errors->has(['emailcongty3']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Email 1 của cơ sở 2<span class="required">*</span></label>
                <input class="form-control{{ $errors->has('emailcongty3') ? ' has-error' : '' }}" name="emailcongty3" type="text" value="{{ $info->emailcongty3 }}">
                <div class="help-block">@if($errors->has('emailcongty3')) {{ $errors->first('emailcongty3') }} @endif</div>
            </div>

            <div class="form-group  @if (count($errors->all())) {{$errors->has(['emailcongty4']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Email thứ 2 của cơ sở 2</label>
                <input class="form-control{{ $errors->has('emailcongty4') ? ' has-error' : '' }}" name="emailcongty4" type="text" value="{{ $info->emailcongty4 }}">
                <div class="help-block">@if($errors->has('emailcongty4')) {{ $errors->first('emailcongty4') }} @endif</div>
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
