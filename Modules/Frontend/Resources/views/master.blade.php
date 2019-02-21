<!DOCTYPE html>
<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>
        @yield('page_title')
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/ico" href="{{ asset("/images/favicon.ico") }}">
    <meta name='description' content=''/>
    <meta name='keywords' content=''/>
    <meta name='robots' content='index,follow'/>
    <meta name='revisit-after' content='1 days'/>
    <meta http-equiv='content-language' content='vi'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="http://www.moitruonghanoi.com/" />
    <!--    for facebook-->
    <meta property="og:title"
          content="Moi truong Ha Noi"/>
    <meta property="og:site_name" content="Moi truong Ha Noi"/>
    <meta property="og:url" content="http://www.moitruonghanoi.com/"/>
    <meta property="og:description"
          content=""/>
    <meta property="og:type" content=""/>
    <meta property="og:image" content="{{ asset("/images/favicon.ico") }}"/>
    <meta property="og:locale" content="vi_VN"/>
    <!-- for Twitter -->
    <meta name="twitter:card" content=""/>
    <meta name="twitter:title" content="Moi truong Ha Noi"/>
    <meta name="twitter:description" content=""/>
    <meta name="twitter:image" content="{{ asset("/images/favicon.ico") }}"/>
    <!-- for app_id facebook -->
    <meta property="fb:app_id" content="144602816058948" />

    <link rel="stylesheet" href="{{ asset('assets/css/front_end/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/front_end/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/front_end/resetDefalt.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/front_end/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/front_end/owl.theme.default.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/front_end/nav-menu.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/front_end/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/front_end/setmedia.css') }}"/>

    <script src="{{ asset('assets/js/front_end/jquery-2.2.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/front_end/bootstrap.min.js') }}" type="text/javascript"></script>

    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/front_end/style_edit.css') }}"/>

    <div id="fb-root"></div>

    @yield('styles')

</head>

<body class="@yield('body_class') page-lang-vi">
    <!-- Header-->
    <header>
        <section class="header">
            <div class="box-header">
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 hidden-xs hidden">
                                <ul class="social-top pull-right hidden-sm">
                                    <li class="dropdown">
                                        <span class="day">Thứ ba,</span>
                                        12-02-2019                                                                                                      <span class="time">23:33:29</span> GMT+7
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-language"></i>
                                            <span class="hidden hidden-xs">&nbsp;                                                <img src="{{ asset('/assets/img/vi.jpg') }}" alt="">
                                                &nbsp;</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('homepage') }}"><img src="{{ asset('/assets/img/vi.jpg') }}" alt=""></a></li>
                                            <li><a href="{{ route('homepage') }}"><img src="{{ asset('/assets/img/en.jpg') }}" alt=""></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="https://twitter.com/" title=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.facebook.com/" title=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.youtube.com/" title=""><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.linkedin.com/" title=""><i class="fa fa-linkedin" aria-hidden="true" style=" margin-top: 0px;
      background: none;
    color: #333;
        text-align: left;
    margin-top: 0px;
     float: left;
     padding: 0px;
    }"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="top-center">
                    <div class="visible-xs visible-sm menu_mb">
                        <button class="nav-toggle">
                            <div class="icon-menu">
                                <span class="line line-1"></span>
                                <span class="line line-2"></span>
                                <span class="line line-3"></span>
                            </div>
                        </button>
                        <a href="{{ route('homepage') }}"><img class="" src="{{ asset('/images/entech.png') }}" alt="Logo"></a>
                        <ul class="hidden-xs social-top pull-right ngonngu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="">&nbsp;
                                            <img src="{{ asset('/assets/img/vi.jpg') }}" alt="">
                                            &nbsp;</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('homepage') }}"><img src="{{ asset('/assets/img/vi.jpg') }}" alt=""></a></li>
                                    <li><a href="{{ route('homepage') }}"><img src="{{ asset('/assets/img/en.jpg') }}" alt=""></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </section>
                <div class="clearfix"></div>
                <section id="menu-main" class="sticky-header">
                    <div class="container">
                        <!-- /menu_mb -->
                        <div class="row">
                            <div class=" col-lg-2 col-md-3 hidden-sm hidden-xs">
                                <div class="logo-pc">
                                    <a href="{{ route('homepage') }}"><img class="img-responsive" src="{{ asset('/images/entech.png') }}" alt="Logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-9 col-sm-12">
                                <div class="menu_main pull-right" style="top: 5px;">
                                    <nav class="nav is-fixed" role="navigation">
                                        <div class="wrapper wrapper-flush">
                                            <div class="nav-container">
                                                <ul class="nav-menu menu">
                                                    <li class="menu-item active">
                                                        <a href="{{ route('homepage') }}" class="menu-link"><i class="fa fa-home"></i> Trang chủ</a>
                                                    </li>
                                                    <li class="menu-item has-dropdown">
                                                        <a href="#" class="menu-link ">Công nghệ</a>
                                                        <ul class="nav-dropdown menu clearfix">
                                                            @foreach($loaicongnghe as $item)
                                                                <li class="menu-item">
                                                                    <a href="{{ route('frontend.loaicongnghe', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" class="menu-link"><i
                                                                            class="fa fa-angle-double-right"
                                                                            aria-hidden="true"></i> {{ $item['title'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item  has-dropdown">
                                                        <a href="{{ route('homepage') }}" class="menu-link ">Các dự án</a>
                                                        <ul class="nav-dropdown menu clearfix">
                                                            @foreach($loaiduan as $item)
                                                                <li class="menu-item">
                                                                    <a href="{{ route('frontend.loaiduan', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" class="menu-link"><i
                                                                            class="fa fa-angle-double-right"
                                                                            aria-hidden="true"></i> {{ $item['title'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item  has-dropdown">
                                                        <a href="{{ route('homepage') }}" class="menu-link ">Sản phẩm</a>
                                                        <ul class="nav-dropdown menu clearfix">
                                                            @foreach($loaisanpham as $item)
                                                                <li class="menu-item">
                                                                    <a href="{{ route('frontend.loaisanpham', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" class="menu-link"><i
                                                                            class="fa fa-angle-double-right"
                                                                            aria-hidden="true"></i> {{ $item['title'] }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item  has-dropdown">
                                                        <a href="{{ route('frontend.tintuc') }}" class="menu-link ">Tin tức</a>
                                                    </li>
                                                    <li class="menu-item ">
                                                        <a href="{{ route('frontend.lienhe') }}" class="menu-link ">Liên hệ </a>
                                                    </li>

                                                    <li class="menu-item"><a href="#"
                                                                                       class="menu-link search-top"><i
                                                                class="fa fa-search" aria-hidden="true"></i></a></li>
                                                    <li class="menu-item hidden-xs" style="position: relative; display: none">
                                                        <a  href="#" class="dropdown-toggle menu-link" data-toggle="dropdown" aria-expanded="false">
                                                            <i class="fa hidden fa-language"></i>
                                                            <img style="width: 22px;" src="{{ asset('/assets/img/vi.jpg') }}" alt="">
                                                            &nbsp;
                                                        </a>
                                                        <ul class="dropdown-menu ngonngu">
                                                            <li><a href="{{ route('homepage') }}"><img src="{{ asset('/assets/img/vi.jpg') }}" alt=""></a></li>
                                                            <li><a href="{{ route('homepage') }}"><img src="{{ asset('/assets/img/en.jpg') }}" alt=""></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <form action="/" method="get" class="form_search" style="display: none">
                                <div class="form-group pull-right">
                                    <input type="text" name="s"  class="input-sm input-search" placeholder="Tìm kiếm"/>
                                    <button type="submit" class="btn button-search"><i class="fa fa-search"
                                                                                       aria-hidden="true"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>

            @yield('sliders')

        </section>
    </header>
    <!-- End Header-->

    @yield('content')

<div id="scroll_top"></div>

<footer class="">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="box-footer wow zoomInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <div class="address-bottom">
                            <div class="logo-f">
                                <a href="{{ route('homepage') }}"><img class="img-responsive" style="max-width: 100%;"  src="{{ asset('/images/entech.png') }}" alt="Logo"></a>
                            </div>
                            <ul class="address-f">
                                <li>  <i class="fa fa-map-marker" aria-hidden="true"></i>  <p>Số 14 - Đường A – Thành Trung – Trâu Qùy – Gia Lâm – Hà nội </p></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><p><a href="tel:+84-220-3.755.997  | +84-220-3.755.998" title="+84-220-3.755.997  | +84-220-3.755.998">04.62932798  | 38760436</a></p></li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i><p>moitruonghanoi@gmail.com</p></li>
                                <li><i class="fa fa-globe" aria-hidden="true"></i><p><a href="{{ route('homepage') }}" style="color: #7fc142">{{ route('homepage') }}</a></p></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="box-footer">
                        <h3 class="title-bottom title-bottom-menu-1">
                            <a href="{{ route('homepage') }}" >CÔNG TY CỔ PHẦN CÔNG NGHỆ VÀ MÔI TRƯỜNG HÀ NỘI</a>
                        </h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-bottom">
                                    <li class="menu-item">
                                        <a href="/"><img src="{{ asset('/assets/img/icon_ul.png') }}" alt=""/>Giới thiệu</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/"><img src="{{ asset('/assets/img/icon_ul.png') }}" alt=""/>Các loại sản phẩm</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/"><img src="{{ asset('/assets/img/icon_ul.png') }}" alt=""/>Dự án đã thực hiện</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ route('frontend.tintuc') }}"><img src="{{ asset('/assets/img/icon_ul.png') }}" alt=""/>Tin tức</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-bottom">
                                    @foreach($loaicongnghe as $item)
                                        <li class="menu-item">
                                            <a href="{{ route('frontend.loaicongnghe', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}"><img src="{{ asset('/assets/img/icon_ul.png') }}" alt=""/>{{ $item['title'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="box-footer wow zoomInLeft" data-wow-duration="1s" data-wow-delay="1s">
                        <h3 class="hidden-xs title-bottom" style="color: #212533;">
                            ---   </h3>
                        <div class="videos-f">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d4905.640447586905!2d105.93349989184777!3d21.011935406804632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zU-G7kSAxNCwgxJDGsOG7nW5nIEEsIFRow6BuaCBUcnVuZywgVHLDonUgUcO5eSwgR2lhIEzDom0sIEjDoCBu4buZaSA!5e0!3m2!1svi!2s!4v1550596973203" width="100%" height="210" frameborder="0" style="border:0; margin-top: 20px;" allowfullscreen></iframe>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <section class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="pull-left text-copyright wow zoomInLeft" data-wow-delay="0.5s" data-wow-duration="0.5s">Copyright © 2019 by Moi truong Ha Noi. All rights reserved</p>
                    <ul class="social-f  pull-right wow zoomInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <li class=""><a href="https://www.facebook.com/" title=""><img src="{{ asset('/assets/img/fb.png') }}" alt=""></a></li>
                        <li class=""><a href="" title=""><img src="{{ asset('/assets/img/g.png') }}" alt=""></a></li>
                        <li class=""><a href="" title=""><img src="{{ asset('/assets/img/p.png') }}" alt=""></a></li>
                        <li class=""><a href="https://twitter.com" title=""><img src="{{ asset('/assets/img/tw.png') }}" alt=""></a></li>
                        <li class=""><a href="https://www.youtube.com" title=""><img src="{{ asset('/assets/img/yt.png') }}" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>


<script src="{{ asset('assets/js/front_end/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/front_end/nav-menu.js') }}" type="text/javascript"></script>

<link rel="stylesheet" href="{{ asset('assets/css/front_end/animate.min.css') }}"/>
<script src="{{ asset('assets/js/front_end/wow.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/front_end/modernizr.custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/front_end/style-main.js') }}" type="text/javascript"></script>
<link href="{{ asset('assets/css/front_end/star-rating.css') }}" rel="stylesheet" media="all"/>
<script  src="{{ asset('assets/js/front_end/star-rating.js') }}" type="text/javascript"></script>

<link rel="stylesheet" href="{{ asset('assets/css/front_end/validationEngine.jquery.css') }}">
<script src="{{ asset('assets/js/front_end/jquery.validationEngine-vi.js') }}" charset="utf-8"></script>
<script src="{{ asset('assets/js/front_end/jquery.validationEngine.js') }}"></script>
<script src="{{ asset('assets/js/front_end/custom.js') }}"></script>

@stack('scripts')

</body>
</html>
