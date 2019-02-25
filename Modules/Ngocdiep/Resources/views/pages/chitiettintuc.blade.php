@extends('ngocdiep::master')

@section('page_title')
    {{ __('Tin tức') }}
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
                        <a href="{{ route('tintuc.list') }}" title="Tin tức">{{ __('Tin tức') }}</a>
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
                                <h1 class="main-title"><span>{{ $tintucDetail[$title] }}</span></h1>
                                <div class="description">
                                    {!! $tintucDetail[$description] !!}
                                </div>
                                <div class="content">
                                    {!! $tintucDetail[$noidung] !!}
                                </div>
                            </article>
                        </section>
                    </section><!-- .article-detail -->
                    <section class="art-same">
                        <header class="panel-head">
                            <h2 class="heading"><span>{{ __('Tin liên quan') }}</span></h2>
                        </header>
                        <section class="panel-body">
                            <ul class="uk-grid lib-grid-15 uk-grid-width-1-2 uk-grid-width-medium-1-3 list-article" data-uk-grid-match="{target: '.article .title'}">

                                <?php
                                $i = 0;
                                foreach($tintuc as $item) {
                                if($i < 3) {
                                ?>

                                @if($item['id'] != $tintucDetail['id'])
                                    <li>
                                        <article class="article">
                                            <div class="thumb">
                                                <a href="{{ route('tintuc', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}" class="image img-cover img-flash">
                                                    <img src="{{ asset('/').$item['image']['url'] }}" alt="{{ $item[$title] }}">
                                                </a>
                                            </div>
                                            <div class="infor">
                                                <h4 class="title" style="min-height: 40px;">
                                                    <a href="{{ route('tintuc', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">{{ $item[$title] }}</a>
                                                </h4>
                                            </div>
                                        </article><!-- .article-->
                                    </li>

                                @endif
                                <?php
                                } else {
                                    break;
                                }
                                $i++;
                                }
                                ?>
                            </ul>
                        </section>
                    </section><!-- .article-related -->
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

