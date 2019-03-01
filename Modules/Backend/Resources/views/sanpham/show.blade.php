@extends('backend::layouts.main')
@section('page_title')
{{ $sanpham->title ? $sanpham->title : "" }}
@endsection
@section('breadcrumb')
<ul class="breadcrumb">
    <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
    <li><a href="{{ route('backend.sanpham.index') }}">Danh sách</a></li>
    <li class="active">{{ $sanpham->title ? $sanpham->title : "" }}</li>
</ul>
@endsection
@section('content')
{{--    <h1>{{ $sanpham->title ? $sanpham->title : "" }}</h1>--}}
    <p>
        {!! Form::open(['route'=>['backend.sanpham.destroy', $sanpham->id], 'method'=>'DELETE']) !!}
        <a class="btn btn-success" href="{{ route('backend.sanpham.create') }}">Tạo mới</a>
        <a class="btn btn-primary" href="{{ route('backend.sanpham.edit', $sanpham->id) }}">Sửa</a>
        {!! Form::submit('Xoá',['class'=>'btn btn-danger confirm','onclick'=>'return confirm("Are you sure you want to delete this item?");']) !!}
    </p>

    <table id="w0" class="table table-striped table-bordered detail-view">
        <tbody>
            <tr><th>ID</th><td>{{ $sanpham->id }}</td></tr>
            <tr><th>Tiêu đề</th><td>{{ $sanpham->title }}</td></tr>
            <tr><th>Tiêu đề - English</th><td>{{ $sanpham->title_en }}</td></tr>
            <tr><th>Link</th><td>{!! $sanpham->slug ? $sanpham->slug : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Thuộc loại sản phẩm</th><td>{{ $sanpham->loaisanpham->title }}</td></tr>
            <tr><th>Nội dung </th><td>{!! $sanpham->noidung ? $sanpham->noidung : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Nội dung - English</th><td>{!! $sanpham->noidung_en ? $sanpham->noidung_en : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Mô tả </th><td>{!! $sanpham->description ? $sanpham->description : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Mô tả - English</th><td>{!! $sanpham->description_en ? $sanpham->description_en : "<span class='not-set'>(not set)</span>"  !!}</td></tr>
            <tr><th>Ngày tạo</th><td><p class="c_timezone">{{ $sanpham->created_at }}</p></td></tr>
            <tr><th>Ngày sửa</th><td><p class="c_timezone">{{ $sanpham->updated_at }}</p></td></tr>
            <tr><th>Hình ảnh</th><td>{!! $sanpham->image ? "<img  class='show-images' src='".asset('/').$sanpham->image->url."' alt=''>" : "<span class='not-set'>(not set)</span>"!!}</td></tr>
            <?php
                for($i = 1; $i <=10; $i++) {
                    $cata = 'catalogs'.$i;
                    $active = 'active'.$i;
            ?>
                <tr><th>Catalog {{ $i }}</th><td>{!! $sanpham->$cata ? "<a  class='show-images' href='".asset('/backend/upload/catalogs'). '/'.$sanpham->$cata."' target='_blank'> ". $sanpham->$cata."</a>" : "<span class='not-set'>(not set)</span>"!!} --- {{ $sanpham->$active == '1' ? "Active" : "Non-active" }}</td></tr>
            <?php
                }
            ?>

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
