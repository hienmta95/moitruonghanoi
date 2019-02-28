@extends('backend::layouts.main')
@section('page_title')
    @if($position == '1') Tạo mới phần 4 hình ảnh đầu tiên ở trang chủ
    @elseif($position == '2') Tạo mới phần 4 hình ảnh thứ hai ở trang chủ
    @elseif($position == '3') Tạo mới phần video ở trang chủ
    @elseif($position == '4') Tạo mới phần logo scroll
    @endif
@endsection
@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
    <li><a href="{{ route('backend.section.index', ['position'=>$position]) }}">Danh sách</a></li>
    <li class="active">@if($position == '1') Tạo mới phần 4 hình ảnh đầu tiên ở trang chủ
        @elseif($position == '2') Tạo mới phần 4 hình ảnh thứ hai ở trang chủ
        @elseif($position == '3') Tạo mới phần video ở trang chủ
        @elseif($position == '4') Tạo mới phần logo scroll
        @endif</li>
</ul>
@endsection
@section('content')
    {{--<h1>Create section</h1>--}}
    <div class="sp-push-form">
        <form action="{{ route('backend.section.store', ['position'=>$position]) }}" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="form-group @if (count($errors->all())) {{$errors->has(['title']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tiêu đề <span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('title') ? ' has-error' : '' }}" name="title" value="{{ old('title') }}">
                <div class="help-block">@if($errors->has('title')) {{ $errors->first('title') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['title_en']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tiêu đề - English<span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('title_en') ? ' has-error' : '' }}" name="title_en" value="{{ old('title_en') }}">
                <div class="help-block">@if($errors->has('title_en')) {{ $errors->first('title_en') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['link']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Link</label>
                <input type="text" class="form-control{{ $errors->has('link') ? ' has-error' : '' }}" name="link" value="{{ old('link') }}">
                <div class="help-block">@if($errors->has('link')) {{ $errors->first('link') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['video']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Video URL</label>
                <input type="text" class="form-control{{ $errors->has('video') ? ' has-error' : '' }}" name="video" value="{{ old('video') }}">
                <div class="help-block">@if($errors->has('video')) {{ $errors->first('video') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['image']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Hình ảnh <span class="required">*</span></label>
                <input id="input-b1" name="image" type="file" class="file" accept=".jpg,.gif,.png,.jpeg">
                <div class="help-block">@if($errors->has('image')) {{ $errors->first('image') }} @endif</div>
            </div>

            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Lưu</button>
            </div>

        </form>
    </div>

@endsection

@push('scripts')

    <script src="{!! asset('/backend/bower_components/ckeditor/ckeditor.js') !!}"></script>
    <script> CKEDITOR.replace('content_section'); </script>

    <link rel="stylesheet" href="<?php echo asset('backend/bower_components/bootstrap-fileinput/css/fileinput.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('backend/bower_components/bootstrap-fileinput/css/fileinput-rtl.css')?>" type="text/css">
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/plugins/piexif.js') !!}"></script>
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/fileinput.js') !!}"></script>

@endpush
