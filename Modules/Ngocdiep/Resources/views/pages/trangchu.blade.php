@extends('ngocdiep::master')

@section('page_title', 'Môi trường Hà Nội')

@section('sliders')
    @include('ngocdiep::pages.slide')
@endsection

@section('styles')
    <style>
        #logo-slider-first .logo-wrap img {
            float: left;
            max-width: 100px;
        }
    </style>
@endsection

@section('content')

    <div id="homepage" class="page-body">



        <section class="homepage-category logo-scroll" style="margin-bottom: 0px;">

            <section class="slider" id="logo-slider-first">
                @foreach($section as $key=>$items)
                    @if($key == 1)
                        @foreach($items as $key2=>$item)
                            <div class="logo-wrap">
                                <a class="box" href="{{ $item['link'] }}"
                                   title="{{ $item[$title] }}" target="_blank">
                                <span class="icon">
                                    <img src="{{ $item['image'] }}" alt="{{ $item[$title] }}"/>
                                </span>
                                <span class="label" style="color: #000 !important;">{{ $item[$title] }}</span>
                                </a>
                            </div>
                        @endforeach
                    @endif
                @endforeach

            </section>

        </section><!-- .homepage-category -->


        {{--<section class="homepage-category">--}}
            {{--<div class="uk-container uk-container-center">--}}
                {{--<div class="uk-slidenav-position slider" data-uk-slider="{autoplay: true, autoplayInterval: 10500}">--}}
                    {{--<div class="uk-slider-container">--}}
                        {{--<ul class="uk-slider uk-grid uk-grid-small uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 list">--}}

                            {{--@foreach($section as $key=>$items)--}}
                                {{--@if($key == 1)--}}
                                    {{--@foreach($items as $key2=>$item)--}}
                                        {{--<li>--}}
                                            {{--<a class="box" href="{{ $item['link'] }}"--}}
                                               {{--title="{{ $item[$title] }}" target="_blank">--}}
                                        {{--<span class="icon">--}}
                                            {{--<img src="{{ $item['image'] }}" alt="{{ $item[$title] }}"/>--}}
                                        {{--</span>--}}
                                                {{--<span class="label" style="color: #000 !important;">{{ $item[$title] }}</span>--}}
                                            {{--</a>--}}
                                        {{--</li>--}}
                                    {{--@endforeach--}}
                                {{--@endif--}}
                            {{--@endforeach--}}

                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- .slider -->--}}
            {{--</div>--}}
        {{--</section><!-- .homepage-category -->--}}

        <div class="uk-container uk-container-center">
            <section class="packaging-category">
                <section class="panel-body">
                    <ul class="uk-grid uk-grid-medium uk-grid-width-1-2 uk-grid-width-large-1-4 list">

                        @foreach($section as $key=>$items)
                            @if($key == 2)
                                @foreach($items as $key2=>$item)
                                    <li>
                                        <div class="box">
                                            <h2 class="main-title">
                                                <a href="{{ $item['link'] }}" title="{{ $item[$title] }}">
                                                    {{ $item[$title] }}
                                                </a>
                                            </h2>

                                            <div class="content">
                                                <div class="thumb hover1">
                                                    <a class="image img-cover img-hover" href="{{ $item['link'] }}"
                                                       title="{{ $item[$title] }}">
                                                        <img src="{{ $item['image'] }}" alt="{{ $item[$title] }}"/>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        @endforeach

                    </ul>
                </section>
            </section>

            <section class="packaging-general">
                <div class="uk-grid uk-grid-medium uk-grid-width-medium-1-2 uk-grid-width-large-1-3">
                    <section class="panel project">
                        <header class="panel-head">
                            <h2 class="heading">
                                <a href="#"
                                   title="Các dự án xử lý môi trường">{{ __('Dự án') }}</a>
                            </h2>
                        </header>
                        <section class="panel-body">
                            <div class="uk-slidenav-position slideshow"
                                 data-uk-slideshow="{autoplay: true, autoplayInterval: 4500, animation: 'scroll'}">
                                <ul class="uk-slideshow">
                                    @foreach($duans as $item)
                                        <li>
                                            <article class="article">
                                                <div class="thumb">
                                                    <a class="image img-cover" href="{{ route('duan', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}"
                                                       title="{{ $item[$title] }}">
                                                        <img src="{{ asset('/'). $item['image']['url'] }}"
                                                             alt="{{ $item[$title] }}"/>
                                                    </a>
                                                </div>
                                                <div class="title">
                                                    <a href="{{ route('duan', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}"
                                                       title="{{ $item[$title] }}">
                                                        {{ $item[$title] }}                                                                                                    </a>
                                                </div>
                                            </article>
                                        </li>
                                    @endforeach
                                </ul>
                                <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous"
                                   data-uk-slideshow-item="previous"></a>
                                <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next"
                                   data-uk-slideshow-item="next"></a>
                            </div>
                        </section>
                    </section><!-- .panel -->
                    <section class="panel news">
                        <header class="panel-head">
                            <h2 class="heading uk-flex uk-flex-middle uk-flex-space-between">
                                <a href="{{ route('tintuc.list') }}"
                                   title="Tin tức">{{ __('Tin tức') }}</a>
                                <a class="more-cat" href="{{ route('tintuc.list') }}"
                                   title="Tin tức">{{ __('Xem thêm') }}</a>
                            </h2>
                        </header>
                        <section class="panel-body">
                            <ul class="uk-list uk-clearfix list-article">
                                <?php
                                $i = 0;
                                foreach($tintuc as $item) {
                                    if($i < 3) {
                                        ?>
                                <li>
                                    <article class="article uk-clearfix">
                                        <div class="thumb">
                                            <a class="image img-cover" href="{{ route('tintuc', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}"
                                               title="{{ $item[$title] }}">
                                                <img src="{{ asset('/'). $item['image']['url'] }}"
                                                     alt="{{ $item[$title] }}"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3 class="title">
                                                <a href="{{ route('tintuc', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}"
                                                   title="{{ $item[$title] }}">
                                                    {{ $item[$title] }}                                                                </a>
                                            </h3>

                                            <div class="meta">
                                                {{ __('Ngày đăng') }}: {{ date_format(date_create($item['updated_at']),"d-m-Y") }}
                                            </div>
                                        </div>
                                    </article>
                                    <!-- .article -->
                                </li>

                                    <?php
                                    } else {
                                        break;
                                    }
                                    $i++;
                                    }
                                    ?>
                            </ul>
                        </section>
                        <!-- .panel-body -->
                    </section><!-- .panel -->

                    <section class="panel">
                        <header class="panel-head">
                            <h2 class="heading uk-flex uk-flex-middle uk-flex-space-between">
                                <a href="#"
                                   title="Video">Video</a>
                            </h2>
                        </header>

                        <div class="row">
                            {{--<div class="col-sm-12 col-xs-12">--}}
                                {{--<div class="item_block" data-action="gallery/GalleryBlock/galleryBlock/78"--}}
                                     {{--data-method="get"></div>--}}
                            {{--</div>--}}
                            <div class="col-sm-12 col-xs-12">
                                <div class="box-gallery styleTitle">
                                    <div class="fotorama" data-nav="thumbs">
                                        @foreach($section as $key=>$items)
                                            @if($key == 3)
                                                @foreach($items as $key2=>$item)
                                                    <a
                                                        href="{{ $item['video'] }}"
                                                        data-img="{{ $item['image'] }}">
                                                        <img
                                                            src="{{ $item['image'] }}"
                                                            width="140" height="64">
                                                    </a>
                                                @endforeach
                                            @endif
                                        @endforeach

                                        {{--<a--}}
                                            {{--href="https://www.youtube.com/watch?v=SenGEDMPxVI"--}}
                                            {{--data-img="http://ngocdiep.vn/uploads/images/dscf3512giai-nhat.jpg">--}}
                                            {{--<img--}}
                                                {{--src="http://ngocdiep.vn/uploads/images/dscf3512giai-nhat.jpg"--}}
                                                {{--width="140" height="64">--}}
                                        {{--</a>--}}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </section>
            <!-- packaging-general -->

        </div>
    </div>

@endsection

@push('scripts')
    <script>
        (function ( $ ) {
            $('#logo-slider-first').slick({

                speed: 3000,
                autoplay: true,
                autoplaySpeed: 3000,
                cssEase: 'linear',
                slidesToShow: 1,
                // slidesToScroll: 1,
                variableWidth: true,
                centerMode: true,
                infinite: true,
                pauseOnHover:false

            });
        })(jQuery);
    </script>
@endpush
