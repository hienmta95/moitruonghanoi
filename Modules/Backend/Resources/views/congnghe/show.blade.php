@extends('backend::layouts.main')
@section('page_title')
{{ $congnghe->title ? $congnghe->title : "" }}
@endsection
@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
    <li><a href="{{ route('backend.congnghe.index') }}">Danh sách</a></li>
    <li class="active">{{ $congnghe->title ? $congnghe->title : "" }}</li>
</ul>
@endsection
@section('content')
{{--    <h1>{{ $congnghe->title ? $congnghe->title : "" }}</h1>--}}
    <p>
        {!! Form::open(['route'=>['backend.congnghe.destroy', $congnghe->id], 'method'=>'DELETE']) !!}
        <a class="btn btn-success" href="{{ route('backend.congnghe.create') }}">Tạo mới</a>
        <a class="btn btn-primary" href="{{ route('backend.congnghe.edit', $congnghe->id) }}">Sửa</a>
        {!! Form::submit('Xoá',['class'=>'btn btn-danger confirm','onclick'=>'return confirm("Are you sure you want to delete this item?");']) !!}
    </p>

    <table id="w0" class="table table-striped table-bordered detail-view">
        <tbody>
            <tr><th>ID</th><td>{{ $congnghe->id }}</td></tr>
            <tr><th>Tiêu đề</th><td>{{ $congnghe->title }}</td></tr>
            <tr><th>Tiêu đề - English</th><td>{{ $congnghe->title_en }}</td></tr>
            <tr><th>Link</th><td>{!! $congnghe->slug ? $congnghe->slug : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Thuộc loại công nghệ</th><td>{{ $congnghe->loaicongnghe->title }}</td></tr>
            <tr><th>Nội dung </th><td>{!! $congnghe->noidung ? $congnghe->noidung : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Nội dung - English</th><td>{!! $congnghe->noidung_en ? $congnghe->noidung_en : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Mô tả </th><td>{!! $congnghe->description ? $congnghe->description : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Mô tả - English</th><td>{!! $congnghe->description_en ? $congnghe->description_en : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Ngày tạo</th><td><p class="c_timezone">{{ $congnghe->created_at }}</p></td></tr>
            <tr><th>Ngày sửa</th><td><p class="c_timezone">{{ $congnghe->updated_at }}</p></td></tr>
            <tr><th>Hình ảnh</th><td>{!! $congnghe->image ? "<img  class='show-images' src='".asset('/').$congnghe->image->url."' alt=''>" : "<span class='not-set'>(not set)</span>"!!}</td></tr>
        </tbody>
    </table>

@endsection

@push('css')
    <style>
        .image-room {
            max-width: 160px;
            margin: 5px;
            display: inline-block;
        }
        .image-room img{
            width: 100%;
        }
    </style>
@endpush

@push('scripts')

@endpush
