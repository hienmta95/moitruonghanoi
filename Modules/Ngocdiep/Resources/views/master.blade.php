<!DOCTYPE html>
<html>
<head>
    <base href="{{ route('trangchu') }}" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="vi" />
    <link rel="alternate" href="{{ route('trangchu') }}" hreflang="vi-vn" />
    <meta name="robots" content="index,follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Môi trường Hà Nội" />
    <meta name="copyright" content="Môi trường Hà Nội" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta http-equiv="refresh" content="1800" />

    <!-- for Google -->
    <title>
        @yield('page_title')
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/ico" href="{{ asset("/images/favicon.ico") }}">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="revisit-after" content="1 days">
    <meta name="rating" content="general">

    <!-- for Facebook -->
    <meta property="og:title" content="Môi trường Hà Nội - Tự hào là thương hiệu quốc gia" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="{{ route('trangchu') }}" />
    <meta property="og:description" content="" />
    <meta property="og:site_name" content="Môi trường Hà Nội" />
    <meta property="fb:admins" content=""/>
    <meta property="fb:app_id" content="" />

    <!-- for Twitter -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Môi trường Hà Nội - Tự hào là thương hiệu quốc gia" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="{{ route('trangchu') }}" />

    <link href="{{ asset('ngocdiep/fonts/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('ngocdiep/css/uikit.modify.css') }}" rel="stylesheet" />
    <link href="{{ asset('ngocdiep/css/reset.css') }}" rel="stylesheet" />
    <link href="{{ asset('ngocdiep/css/library.css') }}" rel="stylesheet" />
    <link href="{{ asset('ngocdiep/css/slideshow.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('ngocdiep/css/style.css') }}" rel="stylesheet" />
    <script src="{{ asset('ngocdiep/js/jquery.js') }}"></script>
    <script src="{{ asset('ngocdiep/js/uikit.min.js') }}"></script>
    <script type="text/javascript">
        var BASE_URL = '{{ route('trangchu') }}';
    </script>
    <link rel="stylesheet" href="{{ asset('ngocdiep/css/home-buy.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('ngocdiep/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('ngocdiep/css/fotorama.css') }}"/>
    <script type="text/javascript" src="{{ asset('ngocdiep/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ngocdiep/js/fotorama.js') }}"></script>
    <script src="{{ asset('/ngocdiep/js/platform.js') }}" async defer>{lang: 'vi'}</script>

    @yield('styles')

</head>

<body>

<!-- PC HEADER -->
<header class="pc-header ishome uk-visible-large">
    <section class="topbar">
        <div class="uk-container uk-container-center">
            <div class="uk-flex uk-flex-middle uk-flex-right container">
                <ul class="uk-list uk-clearfix site-link" style="margin: 0px">
                    <li>
                        <a href="{{ route('gioithieu') }}" title="Về chúng tôi">
									<span class="icon">
										<img src="{{ asset('/ngocdiep/img/icon_1.png') }}" alt="icon-menu-top" />
									</span>
                            <span class="label" style="font-size: 100%;">{{ __('Về chúng tôi') }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tintuc.list') }}" title="Thư viện">
									<span class="icon">
										<img src="{{ asset('/ngocdiep/img/icon_2.png') }}" alt="icon-menu-top" />
									</span>
                            <span class="label" style="font-size: 100%">{{ __('Thông báo') }}</span>
                        </a>
                    </li>
                </ul>
                <div class="uk-clearfix pc-language lang-change">
                    <a class="btn en" href="#" title="en">English</a>
                    <a class="btn vi" href="#" title="vi">Vietnamese</a>
                </div>
            </div>
        </div>
    </section><!-- .topbar -->

    <section class="upper">
        <div class="uk-container uk-container-center">
            <div class="uk-flex uk-flex-middle uk-flex-space-between container">
                <div class="logo">
                    <a style="float: left" href="{{ route('trangchu') }}" title="Môi trường Hà Nội">
                        <img style="max-width: 75px;" src="{{ asset('/images/entech.png') }}" alt="Môi trường Hà Nội" />
                    </a>
                    <div class="logo-brand" style="display: inline-block;
    max-width: 190px;
    vertical-align: middle;
    margin-left: 10px;
    min-width: 161px;
    margin-top: 10px;">
                        <h4 style="font-size: 11px;
    line-height: 16px;
    color: #56884c;
    font-weight: 700;">{{ $info['tencongty'] }}</h4>
                    </div>
                </div>
                <nav class="main-navs">
                    <ul class="uk-navbar-nav main-menus">
                        <li>
                            <a href="{{ route('trangchu') }}" title="Trang chủ">
                                {{ __('Trang chủ') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('gioithieu') }}" title="Giới Thiệu">
                                {{ __('Giới thiệu') }}</a>
                        </li>
                        <li>
                            <a href="#" title="Công nghệ của chúng tôi">{{ __('Công nghệ') }}</a>
                            <div class="dropdown-menu">
                                <ul class="uk-list sub_menus">
                                    @foreach($loaicongnghe as $item)
                                        <li>
                                            <a href="{{ route('loaicongnghe', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">{{ $item[$title] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" title="Các sản phẩm">{{ __('Sản phẩm') }}</a>
                            <div class="dropdown-menu">
                                <ul class="uk-list sub_menus">
                                    @foreach($loaisanpham as $item)
                                        <li>
                                            <a href="{{ route('loaisanpham', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">{{ $item[$title] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" title="Các dự án">{{ __('Các dự án') }}</a>
                            <div class="dropdown-menu">
                                <ul class="uk-list sub_menus">
                                    @foreach($loaiduan as $item)
                                        <li>
                                            <a href="{{ route('loaiduan', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">{{ $item[$title] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('tintuc.list') }}" title="Tin tức">
                                {{ __('Tin tức') }}</a>
                        </li>
                        {{--<li>--}}
                            {{--<a href="tuyen-dung" title="Tuyển dụng">--}}
                                {{--Tuyển dụng</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="thu-vien-anh" title="Thư viện ảnh">--}}
                                {{--Thư viện ảnh</a>--}}
                        {{--</li>--}}
                        <li>
                            <a href="{{ route('lienhe') }}" title="Liên hệ">
                                {{ __('Liên hệ') }}</a>
                        </li>
                    </ul>
                </nav>
                <a class="btn-opensearch" href="#search-modal" title="Tìm kiếm" data-uk-modal="{target:'#search-modal'}">{{ __('Tìm kiếm') }}</a>
            </div>
        </div>
    </section><!-- .upper -->
</header><!-- .pc-header -->

<!-- Search box -->
<div id="search-modal" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <div class="pc-search">
            <form action="{{ route('search') }}" method="get" class="uk-form form">
                <input type="text" name="key" class="uk-width-1-1 input-text" placeholder="{{ __('Nhập từ khóa tìm kiếm') }}" />
                <button type="submit" class="btn-submit">{{ __('Tìm kiếm') }}</button>
            </form>
        </div>
    </div>
</div><!-- #search-modal -->


<!-- MOBILE HEADER -->
<header class="mobile-header uk-hidden-large">

    <section class="upper">
        <a class="moblie-menu-btn skin-1" href="#offcanvas" class="offcanvas" data-uk-offcanvas="{target:'#offcanvas'}">
            <span>Menu</span>
        </a>
        <div class="logo">
            <a style="width: auto; display: inline-block;" href="{{ route('trangchu') }}" title="Môi trường Hà Nội">
                <img style="width: 80px;" src="{{ asset('/images/entech.png') }}" alt="Môi trường Hà Nội" />
            </a>
            <div class="logo-brand" style="display: inline-block;
    max-width: 161px;
    vertical-align: middle;
    margin-left: 5px;
    min-width: 161px;">
                <h4 style="font-size: 10px;
    line-height: 16px;
    color: #56884c;
    font-weight: 700;">{{ $info['tencongty'] }}</h4>
            </div>
        </div>

        <div class="uk-clearfix mobile-language lang-change">
            <a class="btn en" href="#" title="en">English</a>
            <a class="btn vi" href="#" title="vi">Vietnamese</a>
        </div>
    </section>

    <section class="lower">
        <div class="mobile-search">
            <form action="{{ route('search') }}" method="get" class="uk-form form">
                <input type="text" name="keyword" class="uk-width-1-1 input-text" placeholder="{{ __('Nhập từ khóa tìm kiếm') }}" />
                <button type="submit" class="btn-submit">{{ __('Tìm kiếm') }}</button>
            </form>
        </div>
    </section><!-- .lower -->
</header><!-- .mobile-header -->

@yield('sliders')

@yield('content')

<footer class="footer" style="color: #fff">
    <section class="upper">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-medium">
                <div class="uk-width-large-1-2">
                    <div class="footer-company">
                        <div class="main-title">
                            <a href="{{ route('trangchu') }}" title="Môi trường Hà Nội">
                                {{ $info['tencongty'] }}                           </a>
                        </div>
                        <p><strong>Address:</strong><br />
                            {{ $info['truso'] }}<br />
                        </p>

                        <p><strong>Emai:</strong><br />
                            {{ $info['emailcongty'] }} | {{ $info['emailcongty2'] }}</p>

                        <p><strong>Tel:</strong><br />
                            {{ $info['tel1'] }} | {{ $info['tel2'] }}</p>

                        <p><strong>Link:</strong><br />
                            <a style="color: #fff" href="{{ route('trangchu') }}">{{ route('trangchu') }}</a>
                        </p>

                    </div>
                </div>
                <div class="uk-width-large-1-2">
                    <div class="footer-social">
                        <div class="main-title"><span>{{ __('Liên kết mạng xã hội') }}</span></div>
                        <ul class="uk-list uk-clearfix list">
                            <li>
                                <a href="{{ $info['facebook'] }}" title="Facebook" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" title="Twitter" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" title="Instagram" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $info['youtube'] }}" title="Youtube" target="_blank">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" title="Google Plus" target="_blank">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer-statistical">
                        <div class="main-title"><span>{{ __('Thống kê truy cập') }}</span></div>
                        <div class="value">Online: <?php echo array_rand(['12','13','14','15','16','17','9','23','22','20','21','24','25','26','27','28'], 1)?> - {{ __('Tổng truy cập') }}: {{ $info['count'] }} {{ __('lượt') }}</div>
                    </div>
                </div>
            </div><!-- .uk-grid -->
        </div>
    </section><!-- .upper -->
</footer>
﻿
<div id="offcanvas" class="uk-offcanvas offcanvas">
    <div class="uk-offcanvas-bar">
        <form class="uk-search" action="{{ route('search') }}" data-uk-search="{}">
            <input class="uk-search-field" type="search" name="key" placeholder="{{ __('Nhập từ khóa tìm kiếm') }}">
        </form>

        <ul class="l1 uk-nav uk-nav-offcanvas uk-nav uk-nav-parent-icon" data-uk-nav>
            <li class="l1 ">
                <a href="{{ route('trangchu') }}" title="Trang chủ" class="l1">{{ __('Trang chủ') }}</a>
            </li>
            <li class="l1 ">
                <a href="{{ route('gioithieu') }}" title="Giới Thiệu" class="l1">{{ __('Giới thiệu') }}</a>
            </li>
            <li class="l1 uk-parent uk-position-relative">
                <a href="#" title="" class="dropicon"></a>
                <a href="#" title="Công nghệ của chúng tôi" class="l1">{{ __('Công nghệ') }}</a>
                <ul class="l2 uk-nav-sub">
                    @foreach($loaicongnghe as $item)
                        <li class="l2">
                            <a href="{{ route('loaicongnghe', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">{{ $item[$title] }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="l1 uk-parent uk-position-relative">
                <a href="#" title="" class="dropicon"></a>
                <a href="#" title="Các sản phẩm" class="l1">{{ __('Sản phẩm') }}</a>
                <ul class="l2 uk-nav-sub">
                    @foreach($loaisanpham as $item)
                        <li class="l2">
                            <a href="{{ route('loaisanpham', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">{{ $item[$title] }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="l1 uk-parent uk-position-relative">
                <a href="#" title="" class="dropicon"></a>
                <a href="#" title="Các dự án" class="l1">{{ __('Các dự án') }}</a>
                <ul class="l2 uk-nav-sub">
                    @foreach($loaiduan as $item)
                        <li class="l2">
                            <a href="{{ route('loaiduan', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">{{ $item[$title] }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="l1 ">
                <a href="{{ route('tintuc.list') }}" title="Tin tức" class="l1">{{ __('Tin tức') }}</a>
            </li>
            {{--<li class="l1 ">--}}
                {{--<a href="tuyen-dung" title="Tuyển dụng" class="l1">Tuyển dụng</a>--}}
            {{--</li>--}}
            {{--<li class="l1 ">--}}
                {{--<a href="thu-vien-anh" title="Thư viện ảnh" class="l1">Thư viện ảnh</a>--}}
            {{--</li>--}}
            <li class="l1 ">
                <a href="{{ route('lienhe') }}" title="Liên hệ" class="l1">{{ __('Liên hệ') }}</a>
            </li>
        </ul>
    </div>
</div><!-- #offcanvas -->
<script src="{{ asset('ngocdiep/js/slider.min.js') }}"></script>
<script src="{{ asset('ngocdiep/js/slideshow.min.js') }}"></script>
<script src="{{ asset('ngocdiep/js/sticky.min.js') }}"></script>
<script src="{{ asset('ngocdiep/js/lightbox.min.js') }}"></script>
<script src="{{ asset('ngocdiep/js/accordion.min.js') }}"></script>
<script src="{{ asset('ngocdiep/js/function.js') }}"></script>
<script src="{{ asset('ngocdiep/js/library1.js') }}"></script>
<script src="{{ asset('backend/dist/js/js/jquery.cookie.js') }}"></script>

<div id="modal-cart" class="uk-modal">
    <div class="uk-modal-dialog" style="width:768px;">
        <a class="uk-modal-close uk-close"></a>
        <div class="cart-content">


        </div>
    </div>
</div>
<div id="modal-buynow" class="uk-modal">
    <div class="uk-modal-dialog uk-modal-dialog-large">
        <a class="uk-modal-close uk-close"></a>
        <div class="cart-content"></div>
    </div>
</div>
<!-- <js> -->

<!-- </js> -->
<div id="fb-root"></div>

@stack('scripts')
<script>
    (function ( $ ) {

        $('body').on('click', '.lang-change a.btn', function (e) {
            e.preventDefault();
            var langText = $(this).attr('title');
            $.cookie("temp-lang", langText, { expires : 1, path:'/' });
            location.reload();
        });

    })(jQuery);
</script>

<script type="text/javascript">
    jQuery(function($) {
        $('body').append('<a style="display:none;" class="callus" href="tel:{{ $info['tel1'] }}">{{ $info['tel1'] }}</a>');
        var lastScrollTop = 0;
        $(window).scroll(function(event){
            var st = $(this).scrollTop();
            if (st > lastScrollTop){
                // downscroll code
                $('a.callus').removeClass('display');
            } else {
                $('a.callus').addClass('display');
            }
            lastScrollTop = st;
        });
    });
</script>

<style type="text/css" media="screen and (max-width:767px)">
    a.callus {
        display: block !important;
        position: fixed;
        z-index: 9999;
        bottom: 20px;
        left: 20px;
        background: #3b9c27 url(http://statics.vietmoz.info/img/ico/glyphicons/earphone-white.png) no-repeat;
        background-position: 10px center;
        background-size: 20px;
        border-radius: 1000px;
        padding: 5px 10px 5px 40px;
        font-weight: 700;
        font-size: 18px;
        line-height: 30px;
        color: #fff;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        -moz-transform: scale(0);
        -webkit-transform: scale(0);
        -o-transform: scale(0);
        -ms-transform: scale(0);
        transform: scale(0);
    }
    a.display.callus {
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        -moz-transform: scale(1);
        -webkit-transform: scale(1);
        -o-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
    }
</style>

</body>
</html>
