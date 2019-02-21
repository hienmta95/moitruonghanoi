@extends('frontend::master')

@section('page_title')
    {{ $loaiduanDetail['title'] }}
@endsection

@section('body_class', 'loaiduan')

@section('sliders')
    @include('frontend::pages.slide')
@endsection

@section('styles')
    <link href="{{ asset('/assets/css/front_end/webwidget_vertical_menu.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

    <article class="bg-article">
        <div class="container">
            <div class="row row-7">

                <div class="col-md-12 pdd-7">
                    <ul class="breadcrumb">
                        <li><a href="/">Trang chủ</a></li>
                        <li><a href="">{{ $loaiduanDetail['title'] }}</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-12 col-xs-12 pdd-7">
                    <h2 class="title-right">
                    <span>
                        {{ $loaiduanDetail['title'] }} </span>
                    </h2>
                    <div class="row row-7">
                        <div class="col-md-12">
                            <ul class="list-new">
                                @foreach($loaiduanDetail['duan'] as $item)
                                    <li>
                                        <div class="list-super row">
                                            {{--<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 col-430">--}}
                                            {{--<a href="{{ route('frontend.duan', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}"><img class="w_100" src="http://www.anphatplastic.com/upload/img/news/1.jpg" alt=""></a>--}}
                                            {{--</div>--}}
                                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-430">
                                                <a href="{{ route('frontend.duan', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}"><h2 class="name-news">{{ $item['title'] }}</h2></a>
                                                <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i><i> {{ date_format(date_create($item['updated_at']),"d-m-Y") }}</i></div>

                                                <div class="dcs-list-item">
                                                    {!! $item['description'] !!}
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="pull-right">
                                                    <a href="{{ route('frontend.duan', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}"> Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="clearfix-10"></div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>

                <div class="col-md-3 hidden-sm hidden-xs pdd-7">
                    @include('frontend::pages.tinnoibat')
                </div>

                <div class="clearfix-20 visible-sm visible-xs"></div>

                <div class="col-md-3 visible-sm visible-xs pdd-7">
                    @include('frontend::pages.tinnoibat')
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
