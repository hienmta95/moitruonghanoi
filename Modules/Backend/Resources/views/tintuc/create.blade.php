@extends('backend::layouts.main')
@section('page_title')
Tạo mới tin tức
@endsection
@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
    <li><a href="{{ route('backend.tintuc.index') }}">Danh sách</a></li>
    <li class="active">Tạo mới tin tức</li>
</ul>
@endsection
@section('content')
    {{--<h1>Create tintuc</h1>--}}
    <div class="sp-push-form">
        <form id="tintuc_create" action="{{ route('backend.tintuc.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group @if (count($errors->all())) {{$errors->has(['title']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tên tin tức<span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('title') ? ' has-error' : '' }}" name="title" value="{{ old('title') }}">
                <div class="help-block">@if($errors->has('title')) {{ $errors->first('title') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['title_en']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tên tin tức - English<span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('title_en') ? ' has-error' : '' }}" name="title_en" value="{{ old('title_en') }}">
                <div class="help-block">@if($errors->has('title_en')) {{ $errors->first('title_en') }} @endif</div>
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

            <div class="form-group @if (count($errors->all())) {{$errors->has(['noidung']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Nội dung<span class="required">*</span></label>
                <textarea id="noidung" class="form-control{{ $errors->has('noidung') ? ' has-error' : '' }}" name="noidung" maxlength="255" rows="3">{{ old('noidung') }}</textarea>
                <script type="text/javascript">
                    var editor = CKEDITOR.replace('noidung',{
                        language:'vi',
                        filebrowserBrowseUrl :'/js/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl : '/js/ckfinder/ckfinder.html?type=Images',
                        filebrowserFlashBrowseUrl : '/js/ckfinder/ckfinder.html?type=Flash',
                        filebrowserUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                    });
                </script>
                <div class="help-block">@if($errors->has('noidung')) {{ $errors->first('noidung') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['noidung_en']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Nội dung - English<span class="required">*</span></label>
                <textarea id="noidung_en" class="form-control{{ $errors->has('noidung_en') ? ' has-error' : '' }}" name="noidung_en" maxlength="255" rows="3">{{ old('noidung_en') }}</textarea>
                <script type="text/javascript">
                    var editor = CKEDITOR.replace('noidung_en',{
                        language:'vi',
                        filebrowserBrowseUrl :'/js/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl : '/js/ckfinder/ckfinder.html?type=Images',
                        filebrowserFlashBrowseUrl : '/js/ckfinder/ckfinder.html?type=Flash',
                        filebrowserUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                    });
                </script>
                <div class="help-block">@if($errors->has('noidung_en')) {{ $errors->first('noidung_en') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['description']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Mô tả</label>
                <textarea id="description" class="form-control{{ $errors->has('description') ? ' has-error' : '' }}" name="description" maxlength="255" rows="1">{{ old('description') }}</textarea>
                <script type="text/javascript">
                    var editor = CKEDITOR.replace('description',{
                        language:'vi',
                        filebrowserBrowseUrl :'/js/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl : '/js/ckfinder/ckfinder.html?type=Images',
                        filebrowserFlashBrowseUrl : '/js/ckfinder/ckfinder.html?type=Flash',
                        filebrowserUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                    });
                </script>
                <div class="help-block">@if($errors->has('description')) {{ $errors->first('description') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['description_en']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Mô tả - English</label>
                <textarea id="description_en" class="form-control{{ $errors->has('description_en') ? ' has-error' : '' }}" name="description_en" maxlength="255" rows="1">{{ old('description_en') }}</textarea>
                <script type="text/javascript">
                    var editor = CKEDITOR.replace('description_en',{
                        language:'vi',
                        filebrowserBrowseUrl :'/js/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl : '/js/ckfinder/ckfinder.html?type=Images',
                        filebrowserFlashBrowseUrl : '/js/ckfinder/ckfinder.html?type=Flash',
                        filebrowserUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                    });
                </script>
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

    <link rel="stylesheet" href="<?php echo asset('backend/bower_components/bootstrap-fileinput/css/fileinput.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('backend/bower_components/bootstrap-fileinput/css/fileinput-rtl.css')?>" type="text/css">
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/plugins/piexif.js') !!}"></script>
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/fileinput.js') !!}"></script>

@endpush
