@extends('backend::layouts.main')
@section('page_title')
    Quản lý sản phẩm
@endsection
@section('breadcrumb')
    <ul class="breadcrumb">
        <li><a href="{{ route('backend.dashboard') }}">Home</a></li>
        <li class="active">Quản lý sản phẩm</li>
    </ul>
@endsection
@section('content')
    <div class="sp-push-index">
        {{--<h1>Dreamhouse quản lý Admin</h1>--}}
        <p>
            <a class="btn btn-success" href="{{ route('backend.sanpham.create') }}">Tạo mới sản phẩm</a>
        </p>
        <div class="grid-view" id="w0">
            <div class="summary">
                <table class="table table-striped table-bordered table-style" id="sanpham-table">
                    <thead>
                    <tr>
                        <th class="un-orderable-col">#</th>
                        <th class="orderable-col">ID</th>
                        <th class="un-orderable-col">Tên sản phẩm</th>
                        <th class="un-orderable-col">Tên trên link</th>
                        <th class="un-orderable-col">Loại sản phẩm</th>
                        <th class="orderable-col">Ngày lập</th>
                        <th class="un-orderable-col">Hành động</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var table = $('#sanpham-table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            autoWidth: true,
            pageLength: 20,
            lengthChange: false,
            lengthMenu: [10, 20, 50, 100],
            ajax: '{!! route('backend.sanpham.indexData') !!}',
            dom: '<"top"i>rt<"bottom"p><"clear">',
            order: [ [1, "desc"] ],
            language: {
                paginate: {
                    previous: "«",
                    next: "»"
                }
            },
            columns: [
                {data: 'DT_RowIndex', orderable: false, searchable: false},
                {data: 'id', name: 'id'},
                {data: 'title', name: 'title', orderable: false},
                {data: 'slug', name: 'slug', orderable: false},
                {data: 'loaisanpham.title', name: 'loaisanpham', orderable: false},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
            "initComplete": function () {
                $('#sanpham-table_paginate').css({"float": "left"});
                var r = $('#sanpham-table tfoot tr');
                $('#sanpham-table thead').append(r);
                this.api().columns().every(function (i) {
                    if (i != 0 && i != 8 && i != 6) {
                        var column = this;
                        var table = $('#sanpham-table').DataTable();
                        var input = document.createElement("input");
                        input.className = "form-control";
                        $(input).appendTo($(column.footer()).empty())
                            .on('change', function () {
                                column.search($(this).val() ? $(this).val() : '', false, false,true).draw();
                            });
                        $('#sanpham-table thead tr th input').css({"width": "100%", "margin": "0px 0px 0px 0px"});
                    }
                });

            },
        });
    </script>
@endpush
