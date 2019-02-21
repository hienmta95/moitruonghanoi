@extends('backend::layouts.main')
@section('page_title')
{{ $loaicongnghe->title ? $loaicongnghe->title : "" }}
@endsection
@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
    <li><a href="{{ route('backend.loaicongnghe.index') }}">Danh sách</a></li>
    <li class="active">{{ $loaicongnghe->title ? $loaicongnghe->title : "" }}</li>
</ul>
@endsection
@section('content')
{{--    <h1>{{ $loaicongnghe->title ? $loaicongnghe->title : "" }}</h1>--}}
    <p>
        {!! Form::open(['route'=>['backend.loaicongnghe.destroy', $loaicongnghe->id], 'method'=>'DELETE']) !!}
        <a class="btn btn-success" href="{{ route('backend.loaicongnghe.create') }}">Tạo mới</a>
        <a class="btn btn-primary" href="{{ route('backend.loaicongnghe.edit', $loaicongnghe->id) }}">Sửa</a>
        {!! Form::submit('Xoá',['class'=>'btn btn-danger confirm','onclick'=>'return confirm("Are you sure you want to delete this item?");']) !!}
    </p>

    <table id="w0" class="table table-striped table-bordered detail-view">
        <tbody>
            <tr><th>ID</th><td>{{ $loaicongnghe->id }}</td></tr>
            <tr><th>Tiêu đề</th><td>{{ $loaicongnghe->title }}</td></tr>
            <tr><th>Link</th><td>{!! $loaicongnghe->slug ? $loaicongnghe->slug : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Giới thiệu</th><td>{!! $loaicongnghe->description ? $loaicongnghe->description : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Ngày tạo</th><td><p class="c_timezone">{{ $loaicongnghe->created_at }}</p></td></tr>
            <tr><th>Ngày sửa</th><td><p class="c_timezone">{{ $loaicongnghe->updated_at }}</p></td></tr>
            <tr><th>Hình ảnh</th><td>{!! $loaicongnghe->image ? "<img  class='show-images' src='".asset('/').$loaicongnghe->image->url."' alt=''>" : "<span class='not-set'>(not set)</span>"!!}</td></tr>
        </tbody>
    </table>

@endsection

@push('css')
    <style>
        .image-loaicongnghe {
            max-width: 160px;
            margin: 5px;
            display: inline-block;
        }
        .image-loaicongnghe img{
            width: 100%;
        }
    </style>
@endpush

@push('scripts')

@endpush
