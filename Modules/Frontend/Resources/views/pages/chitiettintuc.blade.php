@extends('frontend::master')

@section('page_title', 'Tin tức')

@section('body_class', 'tintuc')

@section('styles')

@endsection

@section('content')
    <div class="banner-fix">
        <div class="slider-main owl-carousel owl-theme">
            <div class="item bg-img" style="background-image: url('{{ asset('/'). $tintucDetail['image']['url'] }}')">
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
                        <li><a href="{{ route('frontend.tintuc.list') }}">Tin tức</a></li>
                        <li class="active"><a href="">{{ $tintucDetail['title'] }}</a></li>
                    </ul>
                </div>

                <div class="col-md-3 hidden-sm hidden-xs pdd-7">
                    <div class="left-home">
                        @include('frontend::pages.danhmuccongnghe')
                        @include('frontend::pages.tinnoibat')
                    </div>
                </div>

                <div class="col-md-9 col-sm-12 col-xs-12 pdd-7">
                    <h1 class="title-right">
                    <span>
                        {{ $tintucDetail['title'] }}</span>
                    </h1>
                    <div class="row row-7">
                        <div class="col-md-12 col-sm-12- col-xs-12 product_kts page-detail">
                            <div class="page-des text-justify">
                                {!! $tintucDetail['noidung'] !!}
                            </div>
                            <div class="date-time" style="margin-bottom: 20px">
                                {{ date_format(date_create($tintucDetail['updated_at']),"d-m-Y") }}
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <h2 class="tit_thuongmai"><span>Bài viết cùng chuyên mục</span></h2>
                        <div class="clearix clearfix-30"></div>

                        <div class="row_pc">
                            @foreach($tintuc as $item)
                                <div class="col-md-4 col-sm-4 col-xs-6 col-480 pdd-7">
                                    <div class="item">
                                        <div class="box_news">
                                            <a href="{{ route('frontend.tintuc', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" class="img_news h_63" title="{{ $item['title'] }}">
                                                <img src="{{ asset('/'). $item['image']['url'] }}" alt="{{ $item['title'] }}">
                                            </a>
                                            <div class="sub_news">
                                                <h3 class="name_news"><a href="{{ route('frontend.tintuc', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item['title'] }}">{{ $item['title'] }}</a></h3>
                                                <div class="comment">
                                                    <span class="lich"><img src="{{ asset('/assets/img/lich.png') }}" alt="">{{ date_format(date_create($item['updated_at']),"d-m-Y") }}</span>
                                                </div>
                                                <div class="des_news">

                                                    {!! $item['description'] !!}

                                                </div>
                                            </div>
                                            <div class="detail-news text-center">
                                                <a class="view-news" href="{{ route('frontend.tintuc', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}">Xem tiếp</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-md-3 visible-sm visible-xs pdd-7">
                    <div class="left-home">
                        @include('frontend::pages.danhmuccongnghe')
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
