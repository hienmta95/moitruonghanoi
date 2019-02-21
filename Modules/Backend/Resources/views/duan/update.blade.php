@extends('backend::layouts.main')
@section('page_title')
    Sửa thông tin: {{ $duan->title ? $duan->title : ''}}
@endsection
@section('breadcrumb')
    <ul class="breadcrumb">
        <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
        <li><a href="{{ route('backend.duan.index') }}">Danh sách</a></li>
        <li><a href="{{ route('backend.duan.show', $duan->id) }}">{{ $duan->title ? $duan->title : ''}}</a></li>
        <li class="active">Update</li>
    </ul>
@endsection
@section('content')
    {{--    <h1>Sửa thông tin phòng: {{ $duan->title ? $duan->title : ''}}</h1>--}}
    <div class="sp-push-form">
        <form action="{{ route('backend.duan.update', $duan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PUT"/>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['loaiduan_id']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Chọn loại dự án<span class="required">*</span></label>
                <select class="form-control selectpicker" data-live-search="true" name="loaiduan_id" required>
                    @foreach ($loaiduan as $item)
                        @if(old('loaiduan_id'))
                            <option value="{{ $item->id }}" {{ old('loaiduan_id')==$item->id ? "selected" : "" }}>{{ $item->title }}</option>
                        @else
                            <option value="{{ $item->id }}" {{ $duan->loaiduan->id==$item->id ? "selected" : "" }}>{{ $item->title }}</option>
                        @endif
                    @endforeach
                </select>
                <div class="help-block">@if($errors->has('loaiduan_id')) {{ $errors->first('loaiduan_id') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['title']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tên dự án <span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('title') ? ' has-error' : '' }}" name="title" value="{{ $duan->title }}">
                <div class="help-block">@if($errors->has('title')) {{ $errors->first('title') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['slug']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tên hiển thị trên link<span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('slug') ? ' has-error' : '' }}" name="slug" value="{{ $duan->slug }}">
                <div class="help-block">@if($errors->has('slug')) {{ $errors->first('slug') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['image']) ? 'has-error' : 'has-success'}} @endif">
                <div>
                    <img class="show-images"  class="img-thumbnail" src="{!! $duan->image ? asset('/').$duan->image->url : ""!!}" alt="web_image" title="image">
                </div>
                <label class="control-label">Hình ảnh </label>
                <input type="hidden" name="image_old" value="{{ $duan->image_id  }}">
                <input id="input-b1" name="image" type="file" class="file" accept=".jpg,.gif,.png,.jpeg">
                <div class="help-block">@if($errors->has('image')) {{ $errors->first('image') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['noidung']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Nội dung<span class="required">*</span></label>
                <textarea id="noidung_duan" class="form-control{{ $errors->has('noidung') ? ' has-error' : '' }}" name="noidung" maxlength="255" rows="3">{{ $duan->noidung }}</textarea>
                <div class="help-block">@if($errors->has('noidung')) {{ $errors->first('noidung') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['description']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Mô tả</label>
                <textarea id="description_duan" class="form-control{{ $errors->has('description') ? ' has-error' : '' }}" name="description" maxlength="255" rows="1">{{ $duan->description }}</textarea>
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
    <script> CKEDITOR.replace('description_duan'); </script>
    <script> CKEDITOR.replace('noidung_duan'); </script>

    <link rel="stylesheet" href="<?php echo asset('backend/bower_components/bootstrap-fileinput/css/fileinput.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('backend/bower_components/bootstrap-fileinput/css/fileinput-rtl.css')?>" type="text/css">

    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/plugins/piexif.js') !!}"></script>
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/plugins/sortable.js') !!}"></script>
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/plugins/purify.js') !!}"></script>
    <script src="{!! asset('backend/bower_components/bootstrap-fileinput/js/fileinput.js') !!}"></script>

@endpush
