@extends('backend::layouts.main')
@section('page_title')
Tạo mới loại công nghệ
@endsection
@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
    <li><a href="{{ route('backend.loaicongnghe.index') }}">Danh sách</a></li>
    <li class="active">Tạo mới loại công nghệ</li>
</ul>
@endsection
@section('content')
    {{--<h1>Create loaicongnghe</h1>--}}
    <div class="sp-push-form">
        <form action="{{ route('backend.loaicongnghe.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="form-group @if (count($errors->all())) {{$errors->has(['title']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tên loại công nghệ<span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('title') ? ' has-error' : '' }}" name="title" value="{{ old('title') }}">
                <div class="help-block">@if($errors->has('title')) {{ $errors->first('title') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['title_en']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tên loại công nghệ - English<span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('title_en') ? ' has-error' : '' }}" name="title_en" value="{{ old('title_en') }}">
                <div class="help-block">@if($errors->has('title_en')) {{ $errors->first('title_en') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['slug']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tên hiển thị trên link<span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('slug') ? ' has-error' : '' }}" name="slug" value="{{ old('slug') }}" placeholder="moi-truong-ha-noi">
                <div class="help-block">@if($errors->has('slug')) {{ $errors->first('slug') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['image']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Hình ảnh <span class="required">*</span></label>
                <input id="input-b1" name="image" type="file" class="file" accept=".jpg,.gif,.png,.jpeg">
                <div class="help-block">@if($errors->has('image')) {{ $errors->first('image') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['description']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Giới thiệu</label>
                <textarea id="description_loaicongnghe" class="form-control{{ $errors->has('description') ? ' has-error' : '' }}" name="description" maxlength="255" rows="3">{{ old('description') }}</textarea>
                <div class="help-block">@if($errors->has('description')) {{ $errors->first('description') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['description_en']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Giới thiệu - English</label>
                <textarea id="description_en_loaicongnghe" class="form-control{{ $errors->has('description_en') ? ' has-error' : '' }}" name="description_en" maxlength="255" rows="3">{{ old('description_en') }}</textarea>
                <div class="help-block">@if($errors->has('description_en')) {{ $errors->first('description_en') }} @endif</div>
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
    <script> CKEDITOR.replace('description_loaicongnghe'); </script>
    <script> CKEDITOR.replace('description_en_loaicongnghe'); </script>

    {{----}}
    <link rel="stylesheet" href="<?php echo asset('backend/bower_components/bootstrap-fileinput/css/fileinput.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('backend/bower_components/bootstrap-fileinput/css/fileinput-rtl.css')?>" type="text/css">
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/plugins/piexif.js') !!}"></script>
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/fileinput.js') !!}"></script>

@endpush
