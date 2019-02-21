@extends('backend::layouts.main')
@section('page_title')
{{ $duan->title ? $duan->title : "" }}
@endsection
@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
    <li><a href="{{ route('backend.duan.index') }}">Danh sách</a></li>
    <li class="active">{{ $duan->title ? $duan->title : "" }}</li>
</ul>
@endsection
@section('content')
{{--    <h1>{{ $duan->title ? $duan->title : "" }}</h1>--}}
    <p>
        {!! Form::open(['route'=>['backend.duan.destroy', $duan->id], 'method'=>'DELETE']) !!}
        <a class="btn btn-success" href="{{ route('backend.duan.create') }}">Tạo mới</a>
        <a class="btn btn-primary" href="{{ route('backend.duan.edit', $duan->id) }}">Sửa</a>
        {!! Form::submit('Xoá',['class'=>'btn btn-danger confirm','onclick'=>'return confirm("Are you sure you want to delete this item?");']) !!}
    </p>

    <table id="w0" class="table table-striped table-bordered detail-view">
        <tbody>
            <tr><th>ID</th><td>{{ $duan->id }}</td></tr>
            <tr><th>Tiêu đề</th><td>{{ $duan->title }}</td></tr>
            <tr><th>Link</th><td>{!! $duan->slug ? $duan->slug : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Thuộc loại dự án</th><td>{{ $duan->loaiduan->title }}</td></tr>
            <tr><th>Nội dung </th><td>{!! $duan->noidung ? $duan->noidung : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Mô tả </th><td>{!! $duan->description ? $duan->description : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Ngày tạo</th><td><p class="c_timezone">{{ $duan->created_at }}</p></td></tr>
            <tr><th>Ngày sửa</th><td><p class="c_timezone">{{ $duan->updated_at }}</p></td></tr>
            <tr><th>Hình ảnh</th><td>{!! $duan->image ? "<img  class='show-images' src='".asset('/').$duan->image->url."' alt=''>" : "<span class='not-set'>(not set)</span>"!!}</td></tr>
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
