@extends('ngocdiep::master')

@section('page_title')
    {{ $duan[$title] }}
@endsection

@section('styles')

    <style>
        .panel-body {
            padding: 0;
        }
        .uk-breadcrumb {
            margin: 0;
        }
    </style>

@endsection

@section('content')

    <div id="prddetail-page" class="page-body">
        <div class="breadcrumb">
            <div class="uk-container uk-container-center">
                <ul class="uk-breadcrumb">
                    <li>
                        <a href="{{ route('trangchu') }}" title="Trang chủ">
                            <i class="fa fa-home"></i> {{ __('Trang chủ') }}
                        </a>
                    </li>
                    <li class="uk-active"><a href="{{ route('loaiduan', ['id'=>$duan['loaiduan']['id'], 'slug'=>$duan['loaiduan']['slug']]) }}" title="{{ $duan['loaiduan'][$title] }}">{{ $duan['loaiduan'][$title] }}</a></li>
                    <li class="uk-active"><a href="#" title="{{ $duan[$title] }}">{{ $duan[$title] }}</a></li>

                </ul>
            </div>
        </div>
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-medium">

                <div class="uk-width-large-1-4 uk-visible-large">
                    <aside class="aside">

                        @include('ngocdiep::pages.danhmucduan')

                        @include('ngocdiep::pages.danhmucmail')

                        @include('ngocdiep::pages.tinnoibat')

                    </aside><!-- .aside -->
                </div><!-- .uk-width -->

                <div class="uk-width-large-3-4">
                    <section class="prd-detail">
                        <section class="panel-body">
                            <div class="prd-contents">
                                <div class="label"><span>{{ $duan[$title] }}</span></div>
                                <div class="content detail-content">
                                    {{--<p style="box-sizing: border-box; margin: 0px 0px 10px; color: rgb(0, 0, 0); font-family: Arial, sans-serif; font-size: 14px; text-align: center;">--}}
                                        {{--<img alt="" class="img-thumbnail" src="{{ $duan['image']['url'] }}" style="box-sizing: border-box; border: 1px solid rgb(221, 221, 221); vertical-align: middle; display: inline-block; max-width: 100%; height: 200px; padding: 4px; line-height: 1.42857; border-radius: 0px; transition: all 0.2s ease-in-out; font-family: Arial, sans-serif; width: 273.719px; object-fit: scale-down;">--}}
                                    {{--</p>--}}

                                    {!! $duan[$noidung] !!}

                                    <div>
                                        <i style="font-size: 13px; float: right">
                                            {{ date_format(date_create($duan['updated_at']),"d-m-Y") }}</i>
                                    </div>

                                    <!-- social -->
                                    <div class="socials-share">
                                        <a class="bg-facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ route('duan', ['id'=>$duan['id'], 'slug'=>$duan['slug']]) }}" target="_blank">
                                            <span class="fa fa-facebook"></span> Share
                                        </a>
                                        <a class="bg-twitter" href="https://twitter.com/share?text=moitruonghanoi&url={{ route('duan', ['id'=>$duan['id'], 'slug'=>$duan['slug']]) }}" target="_blank">
                                            <span class="fa fa-twitter"></span> Tweet
                                        </a>
                                        <a class="bg-google-plus" href="https://plus.google.com/share?url={{ route('duan', ['id'=>$duan['id'], 'slug'=>$duan['slug']]) }}" target="_blank">
                                            <span class="fa fa-google-plus"></span> Plus
                                        </a>
                                        <a class="bg-pinterest" href="https://www.pinterest.com/pin/create/button/?url={{ route('duan', ['id'=>$duan['id'], 'slug'=>$duan['slug']]) }}&media={{ asset('/').$duan['image']['url'] }}&description={{ $duan['title'] }}" target="_blank">
                                            <span class="fa fa-pinterest"></span> Pin
                                        </a>

                                        <a class="bg-email" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to{{ $info['emailcongty'] }}&su={{ $duan['title'] }}&body={{ $duan['slug'] }}" target="_blank">
                                            <span class="fa fa-envelope"></span> Gmail
                                        </a>
                                    </div>
                                    <!-- end -->


                                </div>
                            </div>
                        </section>
                    </section>
                    <section class="prdcatalogue prd-same">
                        <header class="panel-head mb10">
                            <div class="heading"><span>{{ __('Mục cùng loại') }}</span></div>
                        </header>
                        <section class="panel-body">
                            <ul class="uk-grid uk-grid-small uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-xlarge-1-4 list-products" data-uk-grid-match="{target: '.product .title'}">
                                @foreach($duanlienquan as $item)
                                    <li>
                                        <div class="product">
                                            <div class="thumb">
                                                <a class="image img-scaledown" href="{{ route('duan', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">
                                                    <img src="{{ asset('/'). $item['image']['url'] }}" alt="{{ $item[$title] }}">
                                                </a>
                                            </div>
                                            <div class="infor">
                                                <h3 class="title" style="min-height: 20px;">
                                                    <a href="{{ route('duan', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">
                                                        {{ $item[$title] }}													</a>
                                                </h3>
                                                <div class="uk-flex uk-flex-middle uk-flex-space-between meta">
                                                    <div class="brand">
                                                        <img src="{{ asset('/images/entech.png') }}" alt="brand">
                                                    </div>
                                                    <div class="viewmore">
                                                        <a href="{{ route('duan', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">
                                                            {{ __('Chi tiết') }} <i class="fa fa-caret-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!-- .infor -->
                                        </div><!-- .product -->
                                    </li>
                                @endforeach

                            </ul>
                        </section>
                    </section><!-- .prd-same -->
                </div>

                <div class="uk-width-large-1-4 uk-visible-small">
                    <aside class="aside">

                        @include('ngocdiep::pages.danhmucduan')

                        @include('ngocdiep::pages.danhmucmail')

                        @include('ngocdiep::pages.tinnoibat')

                    </aside><!-- .aside -->
                </div><!-- .uk-width -->


            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        (function ( $ ) {

        })(jQuery);
    </script>
@endsection
