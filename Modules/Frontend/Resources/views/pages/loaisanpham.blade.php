@extends('frontend::master')

@section('page_title')
    {{ $loaisanphamDetail['title'] }}
@endsection

@section('body_class', 'loaisanpham')

@section('styles')
    <link href="{{ asset('/assets/css/front_end/webwidget_vertical_menu.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

    <div class="banner-fix">
        <div class="slider-main owl-carousel owl-theme">
            <div class="item bg-img" style="background-image: url('{{ asset('/'). $loaisanphamDetail['image']['url'] }}')">
                {{--<a href=""><img class="w_100" src="" alt=""/></a>--}}
            </div>
        </div>
    </div>
    <article class="bg-article">
        <div class="container">
            <div class="row row-7">

                <div class="col-md-12 pdd-7">
                    <ul class="breadcrumb">
                        <li><a href="/">Trang chủ</a></li>
                        <li><a href="">{{ $loaisanphamDetail['title'] }}</a></li>
                    </ul>
                </div>

                <div class="col-md-3 hidden-sm hidden-xs pdd-7">
                    <div class="left-home">
                        @include('frontend::pages.danhmucsanpham')
                        @include('frontend::pages.tinnoibat')
                    </div>
                </div>

                <div class="col-md-9 col-sm-12 col-xs-12 pdd-7">
                    <h2 class="title-right">
                    <span>
                        {{ $loaisanphamDetail['title'] }} </span>
                    </h2>
                    <div class="row row-7">
                        @foreach($loaisanphamDetail['sanpham'] as $item)
                            <div class="col-md-4 col-sm-4 col-xs-6 col-480 pdd-7">
                                <div class="box-prod-pages clearfix">
                                    <a href="{{ route('frontend.sanpham', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" class=""><img class="w_100" src="{{ asset('/').$item['image']['url'] }}" alt="{{ $item['title'] }}"></a>
                                    <div class="dsc-prod-pages">
                                        <h3 class="name-prod-page">
                                            <a href="{{ route('frontend.sanpham', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}">{{ $item['title'] }}</a>
                                        </h3>
                                        <div class="code-prod-pages">
                                            {{--Mã SP: <span></span>--}}
                                        </div>
                                        <div class="btn view-prod-pages hvr-shutter-in-horizontal">
                                            <a href="{{ route('frontend.sanpham', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" style="color:#fff">Chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="clearfix"></div>
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
