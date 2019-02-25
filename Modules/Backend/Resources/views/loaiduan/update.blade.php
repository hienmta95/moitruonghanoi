@extends('backend::layouts.main')
@section('page_title')
    Sửa thông tin loại dự án: {{ $loaiduan->title ? $loaiduan->title : ''}}
@endsection
@section('breadcrumb')
    <ul class="breadcrumb">
        <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
        <li><a href="{{ route('backend.loaiduan.index') }}">Danh sách</a></li>
        <li><a href="{{ route('backend.loaiduan.show', $loaiduan->id) }}">{{ $loaiduan->title ? $loaiduan->title : ''}}</a></li>
        <li class="active">Update</li>
    </ul>
@endsection
@section('content')
    {{--<h1>Sửa thông tin loại dự án: {{ $loaiduan->title ? $loaiduan->title : ''}}</h1>--}}
    <div class="sp-push-form">
        <form action="{{ route('backend.loaiduan.update', $loaiduan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT"/>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['title']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tên loại dự án<span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('title') ? ' has-error' : '' }}" name="title" value="{{ $loaiduan->title }}">
                <div class="help-block">@if($errors->has('title')) {{ $errors->first('title') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['title_en']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tên loại dự án - English<span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('title_en') ? ' has-error' : '' }}" name="title_en" value="{{ $loaiduan->title_en }}">
                <div class="help-block">@if($errors->has('title_en')) {{ $errors->first('title_en') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['slug']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tên hiển thị trên link<span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('slug') ? ' has-error' : '' }}" name="slug" value="{{ $loaiduan->slug }}">
                <div class="help-block">@if($errors->has('slug')) {{ $errors->first('slug') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['description']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Giới thiệu</label>
                <textarea id="description_loaiduan" class="form-control{{ $errors->has('description') ? ' has-error' : '' }}" name="description" maxlength="255" rows="3">{{ $loaiduan->description }}</textarea>
                <div class="help-block">@if($errors->has('description')) {{ $errors->first('description') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['description_en']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Giới thiệu - English</label>
                <textarea id="description_en_loaiduan" class="form-control{{ $errors->has('description_en') ? ' has-error' : '' }}" name="description_en" maxlength="255" rows="3">{{ $loaiduan->description_en }}</textarea>
                <div class="help-block">@if($errors->has('description_en')) {{ $errors->first('description_en') }} @endif</div>
            </div>

            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </form>
    </div>

@endsection

@push('scripts')

    <script src="{!! asset('/backend/bower_components/ckeditor/ckeditor.js') !!}"></script>
    <script> CKEDITOR.replace('description_loaiduan'); </script>
    <script> CKEDITOR.replace('description_en_loaiduan'); </script>
    <link rel="stylesheet" href="<?php echo asset('backend/bower_components/bootstrap-fileinput/css/fileinput.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('backend/bower_components/bootstrap-fileinput/css/fileinput-rtl.css')?>" type="text/css">

    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/plugins/piexif.js') !!}"></script>
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/plugins/sortable.js') !!}"></script>
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/plugins/purify.js') !!}"></script>
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/fileinput.js') !!}"></script>

@endpush



