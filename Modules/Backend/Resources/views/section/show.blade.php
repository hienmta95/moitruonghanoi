@extends('backend::layouts.main')
@section('page_title')
    Sửa thông tin
@endsection
@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
    <li><a href="{{ route('backend.section.index', ['position'=>$position]) }}">Danh sách</a></li>
    <li class="active">{{ $section->title ? $section->title : "" }}</li>
</ul>
@endsection
@section('content')
{{--    <h1>{{ $section->title ? $section->title : "" }}</h1>--}}
    <p>
        {!! Form::open(['route'=>['backend.section.destroy', 'position'=>$position, 'id'=>$section->id], 'method'=>'DELETE']) !!}
        <a class="btn btn-success" href="{{ route('backend.section.create', ['position'=>$position]) }}">Tạo mới</a>
        <a class="btn btn-primary" href="{{ route('backend.section.edit', ['position'=>$position, 'id'=>$section->id]) }}">Sửa</a>
        {!! Form::submit('Xoá',['class'=>'btn btn-danger confirm','onclick'=>'return confirm("Are you sure you want to delete this item?");']) !!}
    </p>

    <table id="w0" class="table table-striped table-bordered detail-view">
        <tbody>
            <tr><th>ID</th><td>{{ $section->id }}</td></tr>
            <tr><th>Tieu de </th><td>{{ $section->title }}</td></tr>
            <tr><th>Tieu de - English</th><td>{{ $section->title_en }}</td></tr>
            <tr><th>Video URL </th><td>{!! $section->video ? $section->video : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Link</th><td>{!! $section->link ? $section->link : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Hình ảnh</th><td>{!! $section->image ? "<img  class='show-images' src='".asset('/').$section->image->url."' alt=''>" : "<span class='not-set'>(not set)</span>"!!}</td></tr>
            <tr><th>Ngày tạo</th><td><p class="c_timezone">{{ $section->created_at }}</p></td></tr>
            <tr><th>Ngày sửa</th><td><p class="c_timezone">{{ $section->updated_at }}</p></td></tr>
        </tbody>
    </table>

@endsection

@push('scripts')

@endpush
