@extends('frontend::master')

@section('page_title')
    {{ $sanpham['title'] }}
@endsection

@section('body_class', 'sanpham')

@section('styles')
    <link href="{{ asset('/assets/css/front_end/webwidget_vertical_menu.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

    <div class="banner-fix">
        <div class="slider-main owl-carousel owl-theme">
            <div class="item bg-img" style="background-image: url('{{ asset('/'). $sanpham['image']['url'] }}')">
            </div>
        </div>
    </div>
    <article class="bg-article">
        <div class="container">
            <div class="row row-7">

                <div class="col-md-12 pdd-7">
                    <ul class="breadcrumb">
                        <li><a href="/">Trang chủ</a></li>
                        <li><a href="{{ route('frontend.loaisanpham', ['id'=>$sanpham['loaisanpham']['id'], 'slug'=>$sanpham['loaisanpham']['slug']]) }}">{{ $sanpham['loaisanpham']['title'] }}</a></li>
                        <li class="active"><a href="">{{ $sanpham['title'] }}</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-12 col-xs-12 pdd-7">
                    <div class="row row-15">
                        <div class="col-md-12 pdd-15">
                            <div class="content-detail">
                                <div class="tabs-detail">
                                    <ul class="nav nav-tabs" style="margin-top: 0px">
                                        <li class="active"><a data-toggle="tab" href="#home-dt">Thông tin chi tiết</a></li>
                                        <li class="hidden"><a data-toggle="tab" href="#menu1-dt"></a></li>
                                        <li class="hidden"><a data-toggle="tab" href="#menu2-dt"></a></li>
                                        <li class="hidden"><a data-toggle="tab" href="#menu2"></a></li>
                                        <li class="hidden"><a data-toggle="tab" href="#menu3"></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="home-dt" class="tab-pane fade in active">
                                            {!! $sanpham['noidung'] !!}
                                            <div class="date-time" style="margin-bottom: 20px">
                                                {{ date_format(date_create($sanpham['updated_at']),"d-m-Y") }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix-15"></div>
                            <div class="prod-lq">
                                <h2 class="title-right">
                                <span>
                                    Sản phẩm liên quan
                                </span>
                                </h2>
                                <div class="row row-7">
                                    @foreach($sanphamlienquan as $item)
                                        <div class="col-md-4 col-sm-4 col-xs-6 col-480 pdd-7">
                                            <div class="box-prod-pages clearfix">
                                                <a href="{{ route('frontend.sanpham', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" class=""><img class="w_100" src="{{ asset('/').$item['image']['url'] }}" alt="{{ $item['title'] }}"></a>
                                                <div class="dsc-prod-pages">
                                                    <h3 class="name-prod-page">
                                                        <a href="{{ route('frontend.sanpham', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}">{{ $item['title'] }}</a>
                                                    </h3>
                                                    {{--<div class="code-prod-pages">--}}
                                                        {{--Mã SP: <span></span>--}}
                                                    {{--</div>--}}
                                                    <div class="btn view-prod-pages hvr-shutter-in-horizontal">
                                                        <a href="{{ route('frontend.sanpham', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" style="color:#fff">Chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 hidden-sm hidden-xs pdd-7">
                    <div class="left-home">
                        @include('frontend::pages.danhmucsanpham')
                        @include('frontend::pages.tinnoibat')
                    </div>
                </div>

                <div class="clearfix-20 visible-sm visible-xs"></div>

                <div class="col-md-3 visible-sm visible-xs pdd-7">
                    <div class="left-home">
                        @include('frontend::pages.danhmucsanpham')
                        @include('frontend::pages.tinnoibat')
                    </div>
                </div>

            </div>
        </div>
    </article>
    <!-- End Main -->

@endsection

@section('scripts')
    <script>
        (function ( $ ) {

        })(jQuery);
    </script>
@endsection
