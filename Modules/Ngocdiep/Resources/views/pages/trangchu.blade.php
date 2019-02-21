@extends('ngocdiep::master')

@section('page_title', 'Môi trường Hà Nội')

@section('sliders')
    @include('ngocdiep::pages.slide')
@endsection

@section('styles')

@endsection

@section('content')

    <div id="homepage" class="page-body">
        <section class="homepage-category">
            <div class="uk-container uk-container-center">
                <div class="uk-slidenav-position slider" data-uk-slider="{autoplay: true, autoplayInterval: 10500}">
                    <div class="uk-slider-container">
                        <ul class="uk-slider uk-grid uk-grid-small uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 list">
                            <li>
                                <a class="box" href="http://ngocdiepfurniture.vn/"
                                   title="Nội thất Ngọc Diệp" target="_blank">
                                        <span class="icon">
                                            <img src="http://ngocdiep.vn/uploads/images/lien-ket-web/noithat.png" alt="Nội thất Ngọc Diệp"/>
                                        </span>
                                    <span class="label" style="color: #000 !important;">Nội thất Ngọc Diệp</span>
                                </a>
                            </li>
                            <li>
                                <a class="box" href="http://baobingocdiep.vn/"
                                   title="Bao bì Ngọc Diệp" target="_blank">
                                        <span class="icon">
                                            <img src="http://ngocdiep.vn/uploads/images/lien-ket-web/baobi.png" alt="Bao bì Ngọc Diệp"/>
                                        </span>
                                    <span class="label" style="color: #000 !important;">Bao bì Ngọc Diệp</span>
                                </a>
                            </li>
                            <li>
                                <a class="box" href="http://ngocdiepwindow.vn/"
                                   title="NGOCDIEPWINDOW" target="_blank">
                                        <span class="icon">
                                            <img src="http://ngocdiep.vn/uploads/images/lien-ket-web/window.png" alt="NGOCDIEPWINDOW"/>
                                        </span>
                                    <span class="label" style="color: #000 !important;">NGOCDIEPWINDOW</span>
                                </a>
                            </li>
                            <li>
                                <a class="box" href="http://nhomdinostar.vn/"
                                   title="Nhôm Dinostar" target="_blank">
                                        <span class="icon">
                                            <img src="http://ngocdiep.vn/uploads/images/lien-ket-web/nhom.png" alt="Nhôm Dinostar"/>
                                        </span>
                                    <span class="label" style="color: #000 !important;">Nhôm Dinostar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- .slider -->
            </div>
        </section><!-- .homepage-category -->

        <div class="uk-container uk-container-center">
            <section class="packaging-category">
                <section class="panel-body">
                    <ul class="uk-grid uk-grid-medium uk-grid-width-1-2 uk-grid-width-large-1-4 list">
                        <li>
                            <div class="box">
                                <h2 class="main-title">
                                    <a href="/" title="Giới thiệu chung">
                                        Giới thiệu chung                                            </a>
                                </h2>

                                <div class="content">
                                    <div class="thumb">
                                        <a class="image img-cover" href="gioi-thieu-chung.html"
                                           title="Giới thiệu chung">
                                            <img src="http://ngocdiep.vn/uploads/.thumbs/images/gioi-thieu-05.jpg" alt="Giới thiệu chung"/>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <h2 class="main-title">
                                    <a href="thanh-tuu.html" title="Thành tựu ">
                                        Thành tựu                                             </a>
                                </h2>

                                <div class="content">
                                    <div class="thumb">
                                        <a class="image img-cover" href="thanh-tuu.html"
                                           title="Thành tựu ">
                                            <img src="http://ngocdiep.vn/uploads/.thumbs/images/thanh-tuu-06(1).jpg" alt="Thành tựu "/>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <h2 class="main-title">
                                    <a href="cac-cong-ty-thanh-vien.html" title="Các công ty thành viên">
                                        Các công ty thành viên                                            </a>
                                </h2>

                                <div class="content">
                                    <div class="thumb">
                                        <a class="image img-cover" href="cac-cong-ty-thanh-vien.html"
                                           title="Các công ty thành viên">
                                            <img src="http://ngocdiep.vn/uploads/.thumbs/images/banner-gioi-thieu-02.jpg" alt="Các công ty thành viên"/>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="box">
                                <h2 class="main-title">
                                    <a href="tam-nhin-su-menh.html" title="Tầm nhìn - Sứ mệnh">
                                        Tầm nhìn - Sứ mệnh                                            </a>
                                </h2>

                                <div class="content">
                                    <div class="thumb">
                                        <a class="image img-cover" href="tam-nhin-su-menh.html"
                                           title="Tầm nhìn - Sứ mệnh">
                                            <img src="http://ngocdiep.vn/uploads/.thumbs/images/tam-nhin-07.jpg" alt="Tầm nhìn - Sứ mệnh"/>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>
                </section>
            </section>

            <section class="packaging-general">
                <div class="uk-grid uk-grid-medium uk-grid-width-medium-1-2 uk-grid-width-large-1-2">
                    <section class="panel project">
                        <header class="panel-head">
                            <h2 class="heading">
                                <a href="#"
                                   title="công nghệ xử lý môi trường">Các công nghệ của chúng tôi</a>
                            </h2>
                        </header>
                        <section class="panel-body">
                            <div class="uk-slidenav-position slideshow"
                                 data-uk-slideshow="{autoplay: true, autoplayInterval: 4500, animation: 'scroll'}">
                                <ul class="uk-slideshow">
                                    @foreach($loaicongnghe as $item)
                                        <li>
                                            <article class="article">
                                                <div class="thumb">
                                                    <a class="image img-cover" href="{{ route('loaicongnghe', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}"
                                                       title="{{ $item['title'] }}">
                                                        <img src="{{ asset('/'). $item['image']['url'] }}"
                                                             alt="{{ $item['title'] }}"/>
                                                    </a>
                                                </div>
                                                <div class="title">
                                                    <a href="{{ route('loaicongnghe', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}"
                                                       title="{{ $item['title'] }}">
                                                        {{ $item['title'] }}                                                                                                    </a>
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
                                   title="Tin tức">Tin tức</a>
                                <a class="more-cat" href="{{ route('tintuc.list') }}"
                                   title="Tin tức">Xem thêm</a>
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
                                            <a class="image img-cover" href=""
                                               title="{{ $item['title'] }}">
                                                <img src="{{ asset('/'). $item['image']['url'] }}"
                                                     alt="{{ $item['title'] }}"/>
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3 class="title">
                                                <a href="{{ route('tintuc', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}"
                                                   title="{{ $item['title'] }}">
                                                    {{ $item['title'] }}                                                                </a>
                                            </h3>

                                            <div class="meta">Ngày đăng                                                                : {{ date_format(date_create($item['updated_at']),"d-m-Y") }}
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

                </div>
            </section>
            <!-- packaging-general -->

        </div>
    </div>

@endsection

@section('scripts')
    <script>
        (function ( $ ) {

        })(jQuery);
    </script>
@endsection
