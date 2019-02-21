@extends('frontend::master')

@section('page_title')
    {{ $duan['title'] }}
@endsection

@section('body_class', 'duan')

@section('styles')
    <link href="{{ asset('/assets/css/front_end/webwidget_vertical_menu.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('sliders')
    @include('frontend::pages.slide')
@endsection

@section('content')

    <article class="bg-article">
        <div class="container">
            <div class="row row-7">

                <div class="col-md-12 pdd-7">
                    <ul class="breadcrumb">
                        <li><a href="/">Trang chủ</a></li>
                        <li><a href="{{ route('frontend.loaiduan', ['id'=>$duan['loaiduan']['id'], 'slug'=>$duan['loaiduan']['slug']]) }}">{{ $duan['loaiduan']['title'] }}</a></li>
                        <li class="active"><a href="">{{ $duan['title'] }}</a></li>
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
                                            {!! $duan['noidung'] !!}
                                            <div class="date-time" style="margin-bottom: 20px">
                                                {{ date_format(date_create($duan['updated_at']),"d-m-Y") }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix-15"></div>
                            <div class="prod-lq">
                                <h2 class="title-right">
                                <span>
                                    Dự án liên quan
                                </span>
                                </h2>
                                <div class="row row-7">
                                    @foreach($duanlienquan as $item)
                                        <div class="col-md-4 col-sm-4 col-xs-6 col-480 pdd-7">
                                            <div class="box-prod-pages clearfix">
                                                {{--<a href="{{ route('frontend.duan', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" class=""><img class="w_100" src="{{ asset('/').$item['image']['url'] }}" alt="{{ $item['title'] }}"></a>--}}
                                                <div class="dsc-prod-pages">
                                                    <h3 class="name-prod-page">
                                                        <a href="{{ route('frontend.duan', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}">{{ $item['title'] }}</a>
                                                    </h3>
                                                    {{--<div class="code-prod-pages">--}}
                                                        {{--Mã SP: <span></span>--}}
                                                    {{--</div>--}}
                                                    <div class="btn view-prod-pages hvr-shutter-in-horizontal">
                                                        <a href="{{ route('frontend.duan', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" style="color:#fff">Chi tiết</a>
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
