@extends('ngocdiep::master')

@section('page_title')
    {{ __('Sơ đồ trang') }}
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

    <div id="article-page" class="page-body">
        <div class="breadcrumb">
            <div class="uk-container uk-container-center">
                <ul class="uk-breadcrumb">
                    <li>
                        <a href="{{ route('trangchu') }}" title="Trang chủ">
                            <i class="fa fa-home"></i> {{ __('Trang chủ') }}</a>
                    </li>
                    <li class="uk-active">
                        <a href="#" title="{{ __('Sơ đồ trang') }}">{{ __('Sơ đồ trang') }}</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-medium">
                <div class="uk-width-large-1-4 uk-visible-large">
                    <aside class="aside">
                        <aside class="aside">

                            @include('ngocdiep::pages.danhmucsanpham')
                            @include('ngocdiep::pages.danhmucmail')
                            @include('ngocdiep::pages.tinnoibat')

                        </aside><!-- .aside -->
                    </aside><!-- .aside -->
                </div>
                <div class="uk-width-large-3-4">
                    <section class="art-detail">
                        <section class="panel-body">
                            <article class="detail-content">
                                <h1 class="main-title"><span>{{ __('Sơ đồ trang') }}</span></h1>
                                <div class="content">
                                    <ul class="sitemap">
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
                                            <ul class="sub_menus">
                                                @foreach($loaicongnghe as $item)
                                                    <li>
                                                        <a href="{{ route('loaicongnghe', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">{{ $item[$title] }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" title="Các sản phẩm">{{ __('Sản phẩm') }}</a>
                                            <ul class="sub_menus">
                                                @foreach($loaisanpham as $item)
                                                    <li>
                                                        <a href="{{ route('loaisanpham', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">{{ $item[$title] }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" title="Các dự án">{{ __('Các dự án') }}</a>
                                            <ul class="sub_menus">
                                                @foreach($loaiduan as $item)
                                                    <li>
                                                        <a href="{{ route('loaiduan', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">{{ $item[$title] }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('tintuc.list') }}" title="Tin tức">
                                                {{ __('Tin tức') }}</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('lienhe') }}" title="Liên hệ">
                                                {{ __('Liên hệ') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </section>
                    </section>
                </div>

                <div class="uk-width-large-1-4 uk-visible-small">
                    <aside class="aside">
                        <aside class="aside">

                            @include('ngocdiep::pages.danhmucsanpham')
                            @include('ngocdiep::pages.danhmucmail')
                            @include('ngocdiep::pages.tinnoibat')

                        </aside><!-- .aside -->
                    </aside><!-- .aside -->
                </div>
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

