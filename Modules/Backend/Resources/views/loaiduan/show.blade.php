@extends('backend::layouts.main')
@section('page_title')
{{ $loaiduan->title ? $loaiduan->title : "" }}
@endsection
@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
    <li><a href="{{ route('backend.loaiduan.index') }}">Danh sách</a></li>
    <li class="active">{{ $loaiduan->title ? $loaiduan->title : "" }}</li>
</ul>
@endsection
@section('content')
{{--    <h1>{{ $loaiduan->title ? $loaiduan->title : "" }}</h1>--}}
    <p>
        {!! Form::open(['route'=>['backend.loaiduan.destroy', $loaiduan->id], 'method'=>'DELETE']) !!}
        <a class="btn btn-success" href="{{ route('backend.loaiduan.create') }}">Tạo mới</a>
        <a class="btn btn-primary" href="{{ route('backend.loaiduan.edit', $loaiduan->id) }}">Sửa</a>
        {!! Form::submit('Xoá',['class'=>'btn btn-danger confirm','onclick'=>'return confirm("Are you sure you want to delete this item?");']) !!}
    </p>

    <table id="w0" class="table table-striped table-bordered detail-view">
        <tbody>
            <tr><th>ID</th><td>{{ $loaiduan->id }}</td></tr>
            <tr><th>Tiêu đề</th><td>{{ $loaiduan->title }}</td></tr>
            <tr><th>Tiêu đề - English</th><td>{{ $loaiduan->title_en }}</td></tr>
            <tr><th>Link</th><td>{!! $loaiduan->slug ? $loaiduan->slug : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Giới thiệu</th><td>{!! $loaiduan->description ? $loaiduan->description : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Giới thiệu - English</th><td>{!! $loaiduan->description_en ? $loaiduan->description_en : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Ngày tạo</th><td><p class="c_timezone">{{ $loaiduan->created_at }}</p></td></tr>
            <tr><th>Ngày sửa</th><td><p class="c_timezone">{{ $loaiduan->updated_at }}</p></td></tr>
        </tbody>
    </table>

@endsection

@push('css')
    <style>
        .image-loaiduan {
            max-width: 160px;
            margin: 5px;
            display: inline-block;
        }
        .image-loaiduan img{
            width: 100%;
        }
    </style>
@endpush

@push('scripts')

@endpush
