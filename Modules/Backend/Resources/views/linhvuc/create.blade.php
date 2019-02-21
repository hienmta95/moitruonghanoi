@extends('backend::layouts.main')
@section('page_title')
Tạo mới lĩnh vực
@endsection
@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
    <li><a href="{{ route('backend.linhvuc.index') }}">Danh sách</a></li>
    <li class="active">Tạo mới lĩnh vực</li>
</ul>
@endsection
@section('content')
    {{--<h1>Create linhvuc</h1>--}}
    <div class="sp-push-form">
        <form action="{{ route('backend.linhvuc.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="form-group @if (count($errors->all())) {{$errors->has(['title']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tên lĩnh vực <span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('title') ? ' has-error' : '' }}" name="title" value="{{ old('title') }}">
                <div class="help-block">@if($errors->has('title')) {{ $errors->first('title') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['slug']) ? 'has-error' : 'has-success'}} @endif" >
                <label class="control-label">Tên hiển thị trên link <span class="required">*</span></label>
                <input type="text" class="form-control{{ $errors->has('slug') ? ' has-error' : '' }}" name="slug" value="{{ old('slug') }}" placeholder="moi-truong-ha-noi">
                <div class="help-block">@if($errors->has('slug')) {{ $errors->first('slug') }} @endif</div>
            </div>

            <div class="form-group @if (count($errors->all())) {{$errors->has(['introduce']) ? 'has-error' : 'has-success'}} @endif">
                <label class="control-label">Introduce</label>
                <textarea id="introduce_linhvuc" class="form-control{{ $errors->has('introduce') ? ' has-error' : '' }}" name="introduce" maxlength="255" rows="3">{{ old('introduce') }}</textarea>
                <div class="help-block">@if($errors->has('introduce')) {{ $errors->first('introduce') }} @endif</div>
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
    <script> CKEDITOR.replace('introduce_linhvuc'); </script>

@endpush
