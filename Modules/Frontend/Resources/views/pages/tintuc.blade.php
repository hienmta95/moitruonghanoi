@extends('frontend::master')

@section('page_title')
    Tin tức
@endsection

@section('body_class', 'tintuc')

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
                        <li><a href="">Tin tức</a></li>
                    </ul>
                </div>

                <div class="col-md-9 col-sm-12 col-xs-12 pdd-7">
                    <h2 class="title-right">
                    <span>
                        Danh mục tin tức</span>
                    </h2>
                    <div class="row row-7">
                        <div class="col-md-12">
                            <ul class="list-new">
                                @foreach($tintuc as $item)
                                    <li>
                                        <div class="list-super row">
                                            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 col-430">
                                            <a href="{{ route('frontend.tintuc', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}"><img class="w_100" src="{{ asset('/').$item['image']['url'] }}" alt=""></a>
                                            </div>
                                            <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8 col-430">
                                                <a href="{{ route('frontend.tintuc', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}"><h2 class="name-news">{{ $item['title'] }}</h2></a>
                                                <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i><i> {{ date_format(date_create($item['updated_at']),"d-m-Y") }}</i></div>

                                                <div class="dcs-list-item">
                                                    {!! $item['description'] !!}
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="pull-right">
                                                    <a href="{{ route('frontend.tintuc', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}"> Xem thêm <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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
                    <div class="left-home">
                        @include('frontend::pages.danhmuccongnghe')
                        @include('frontend::pages.tinnoibat')
                    </div>
                </div>

                <div class="clearfix-20 visible-sm visible-xs"></div>

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
