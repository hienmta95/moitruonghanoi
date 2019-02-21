@extends('backend::layouts.main')
@section('page_title')
    Sửa thông tin loại công nghệ: {{ $loaicongnghe->title ? $loaicongnghe->title : ''}}
@endsection
@section('breadcrumb')
    <ul class="breadcrumb">
        <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
        <li><a href="{{ route('backend.loaicongnghe.index') }}">Danh sách</a></li>
        <li><a href="{{ route('backend.loaicongnghe.show', $loaicongnghe->id) }}">{{ $loaicongnghe->title ? $loaicongnghe->title : ''}}</a></li>
        <li class="active">Update</li>
    </ul>
@endsection
@section('content')
    {{--<h1>Sửa thông tin loại công nghệ: {{ $loaicongnghe->title ? $loaicongnghe->title : ''}}</h1>--}}
    <div class="sp-push-form">nghệ
        <form action="{{ route('backend.loaicongnghe.update', $loaicongnghe->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT"/>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['title']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tên loại công nghệ<span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('title') ? ' has-error' : '' }}" name="title" value="{{ $loaicongnghe->title }}">
                <div class="help-block">@if($errors->has('title')) {{ $errors->first('title') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['slug']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tên hiển thị trên link<span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('slug') ? ' has-error' : '' }}" name="slug" value="{{ $loaicongnghe->slug }}">
                <div class="help-block">@if($errors->has('slug')) {{ $errors->first('slug') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['image']) ? 'has-error' : 'has-success'}} @endif">
                <div>
                    <img class="show-images"  class="img-thumbnail" src="{!! $loaicongnghe->image ? asset('/').$loaicongnghe->image->url : ""!!}" alt="web_image" title="image">
                </div>
                <label class="control-label">Hình ảnh <span class="required">*</span></label>
                <input type="hidden" name="image_old" value="{{ $loaicongnghe->image_id  }}">
                <input id="input-b1" name="image" type="file" class="file" accept=".jpg,.gif,.png,.jpeg">
                <div class="help-block">@if($errors->has('image')) {{ $errors->first('image') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['description']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Giới thiệu</label>
                <textarea id="description_loaicongnghe" class="form-control{{ $errors->has('description') ? ' has-error' : '' }}" name="description" maxlength="255" rows="3">{{ $loaicongnghe->description }}</textarea>
                <div class="help-block">@if($errors->has('description')) {{ $errors->first('description') }} @endif</div>
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
    <script> CKEDITOR.replace('description_loaicongnghe'); </script>
    <link rel="stylesheet" href="<?php echo asset('backend/bower_components/bootstrap-fileinput/css/fileinput.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('backend/bower_components/bootstrap-fileinput/css/fileinput-rtl.css')?>" type="text/css">

    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/plugins/piexif.js') !!}"></script>
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/plugins/sortable.js') !!}"></script>
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/plugins/purify.js') !!}"></script>
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/fileinput.js') !!}"></script>

@endpush



