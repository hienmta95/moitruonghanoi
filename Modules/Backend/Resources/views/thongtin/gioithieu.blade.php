@extends('backend::layouts.main')
@section('page_title')
    Update trang giới thiệu
@endsection
@section('breadcrumb')
    <ul class="breadcrumb">
        <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
        <li class="active">Update giới thiệu</li>
    </ul>
@endsection
@section('content')
    <div class="sp-push-form">
        <form action="{{ route('backend.gioithieu.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group @if (count($errors->all())) {{$errors->has(['gioithieu']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Nội dung trang giới thiệu <span class="required">*</span></label>
                <textarea id="content1" class="form-control{{ $errors->has('gioithieu') ? ' has-error' : '' }}" name="gioithieu" maxlength="255" rows="3">{{ $gioithieu->gioithieu }}</textarea>

                <script type="text/javascript">
                    var editor = CKEDITOR.replace('content1',{
                        language:'vi',
                        filebrowserBrowseUrl :'/js/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl : '/js/ckfinder/ckfinder.html?type=Images',
                        filebrowserFlashBrowseUrl : '/js/ckfinder/ckfinder.html?type=Flash',
                        filebrowserUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                    });
                </script>

                <div class="help-block">@if($errors->has('gioithieu_en')) {{ $errors->first('gioithieu_en') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['gioithieu_en']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Nội dung trang giới thiệu - English <span class="required">*</span></label>
                <textarea id="content_en" class="form-control{{ $errors->has('gioithieu_en') ? ' has-error' : '' }}" name="gioithieu_en" maxlength="255" rows="3">{{ $gioithieu->gioithieu_en }}</textarea>

                <script type="text/javascript">
                    var editor = CKEDITOR.replace('content_en',{
                        language:'vi',
                        filebrowserBrowseUrl :'/js/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl : '/js/ckfinder/ckfinder.html?type=Images',
                        filebrowserFlashBrowseUrl : '/js/ckfinder/ckfinder.html?type=Flash',
                        filebrowserUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl : '/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                    });
                </script>

                <div class="help-block">@if($errors->has('gioithieu_en')) {{ $errors->first('gioithieu_en') }} @endif</div>
            </div>

            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>

@endsection

@push('css')
    <script src="{!! asset('/backend/bower_components/ckeditor/ckeditor.js') !!}"></script>
@endpush
