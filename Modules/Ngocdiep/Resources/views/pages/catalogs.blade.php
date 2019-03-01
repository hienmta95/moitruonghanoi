@extends('ngocdiep::master')

@section('page_title')
    Catalogs
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
                        <a href="#" title="Catalogs">Catalogs</a>
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
                                <h1 class="main-title"><span>Catalogs</span></h1>
                                <div class="content">
                                    <ul class="sitemap">
                                        @foreach($data as $item)
                                            <li>
                                                <a href="{{ route('sanpham', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item['title'] }}">
                                                    {{ $item['title'] }}</a>
                                                <span style="padding: 0 20px;">-</span> {{ $item['catalogs'] }}
                                                (<a style="color: #2F33AB" href="{{ asset('backend/upload/catalogs') .'/'. $item['catalogs'] }}" target="_blank">Download</a>)
                                            </li>
                                        @endforeach

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

