@extends('backend::layouts.main')
@section('page_title')
Tạo mới hoạt động
@endsection
@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
    <li><a href="{{ route('backend.hoatdong.index') }}">Danh sách</a></li>
    <li class="active">Tạo mới hoạt động</li>
</ul>
@endsection
@section('content')
    {{--<h1>Create hoatdong</h1>--}}
    <div class="sp-push-form">
        <form action="{{ route('backend.hoatdong.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="form-group @if (count($errors->all())) {{$errors->has(['linhvuc_id']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Chọn lĩnh vực <span class="required">*</span></label>
                <select class="form-control selectpicker" data-live-search="true" name="linhvuc_id" required>
                    <option value="">Chọn</option>
                    @foreach ($linhvuc as $item)
                        <option value="{{ $item->id }}" {{ old('linhvuc_id')==$item->id ? "selected" : "" }}>{{ $item->title }}</option>
                    @endforeach
                </select>
                <div class="help-block">@if($errors->has('linhvuc_id')) {{ $errors->first('linhvuc_id') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['title']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tên hoạt động <span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('title') ? ' has-error' : '' }}" name="title" value="{{ old('title') }}">
                <div class="help-block">@if($errors->has('title')) {{ $errors->first('title') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['slug']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tên hiển thị trên link <span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('slug') ? ' has-error' : '' }}" name="slug" value="{{ old('slug') }}" placeholder="moi-truong-ha-noi">
                <div class="help-block">@if($errors->has('slug')) {{ $errors->first('slug') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['image']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Hình ảnh <span class="required">*</span></label>
                <input id="input-b1" name="image" type="file" class="file" accept=".jpg,.gif,.png,.jpeg">
                <div class="help-block">@if($errors->has('image')) {{ $errors->first('image') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['content']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Nội dung </label>
                <textarea id="content_hoatdong" class="form-control{{ $errors->has('content') ? ' has-error' : '' }}" name="content" maxlength="255" rows="3">{{ old('content') }}</textarea>
                <div class="help-block">@if($errors->has('content')) {{ $errors->first('content') }} @endif</div>
            </div>

            <div class="form-group">
                <label class="control-label">Nổi bật</label>
                <div>
                    <label class="radio-inline"><input type="radio" name="noibat" value="1" {{ old('noibat') == 1 ? "checked" : "" }}>Yes</label>
                    <label class="radio-inline"><input type="radio" name="noibat" value="0" {{ old('noibat') == 0 ? "checked" : "" }}>No</label>
                </div>
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
    <script> CKEDITOR.replace('content_hoatdong'); </script>

    <link rel="stylesheet" href="<?php echo asset('backend/bower_components/bootstrap-fileinput/css/fileinput.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('backend/bower_components/bootstrap-fileinput/css/fileinput-rtl.css')?>" type="text/css">
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/plugins/piexif.js') !!}"></script>
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/fileinput.js') !!}"></script>

@endpush
