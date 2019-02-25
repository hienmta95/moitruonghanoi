@extends('backend::layouts.main')
@section('page_title')
{{ $loaisanpham->title ? $loaisanpham->title : "" }}
@endsection
@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
    <li><a href="{{ route('backend.loaisanpham.index') }}">Danh sách</a></li>
    <li class="active">{{ $loaisanpham->title ? $loaisanpham->title : "" }}</li>
</ul>
@endsection
@section('content')
{{--    <h1>{{ $loaisanpham->title ? $loaisanpham->title : "" }}</h1>--}}
    <p>
        {!! Form::open(['route'=>['backend.loaisanpham.destroy', $loaisanpham->id], 'method'=>'DELETE']) !!}
        <a class="btn btn-success" href="{{ route('backend.loaisanpham.create') }}">Tạo mới</a>
        <a class="btn btn-primary" href="{{ route('backend.loaisanpham.edit', $loaisanpham->id) }}">Sửa</a>
        {!! Form::submit('Xoá',['class'=>'btn btn-danger confirm','onclick'=>'return confirm("Are you sure you want to delete this item?");']) !!}
    </p>

    <table id="w0" class="table table-striped table-bordered detail-view">
        <tbody>
            <tr><th>ID</th><td>{{ $loaisanpham->id }}</td></tr>
            <tr><th>Tiêu đề</th><td>{{ $loaisanpham->title }}</td></tr>
            <tr><th>Tiêu đề - English</th><td>{{ $loaisanpham->title_en }}</td></tr>
            <tr><th>Link</th><td>{!! $loaisanpham->slug ? $loaisanpham->slug : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Giới thiệu</th><td>{!! $loaisanpham->description ? $loaisanpham->description : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Giới thiệu - English</th><td>{!! $loaisanpham->description_en ? $loaisanpham->description_en : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Ngày tạo</th><td><p class="c_timezone">{{ $loaisanpham->created_at }}</p></td></tr>
            <tr><th>Ngày sửa</th><td><p class="c_timezone">{{ $loaisanpham->updated_at }}</p></td></tr>
            <tr><th>Hình ảnh</th><td>{!! $loaisanpham->image ? "<img  class='show-images' src='".asset('/').$loaisanpham->image->url."' alt=''>" : "<span class='not-set'>(not set)</span>"!!}</td></tr>
        </tbody>
    </table>

@endsection

@push('css')
    <style>
        .image-loaisanpham {
            max-width: 160px;
            margin: 5px;
            display: inline-block;
        }
        .image-loaisanpham img{
            width: 100%;
        }
    </style>
@endpush

@push('scripts')

@endpush
