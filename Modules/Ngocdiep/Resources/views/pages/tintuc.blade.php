@extends('ngocdiep::master')

@section('page_title')
    Tin tức
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
                            <i class="fa fa-home"></i> Trang chủ					</a>
                    </li>
                    <li class="uk-active"><a href="#" title="Tin tức">Tin tức</a></li>
                </ul>
            </div>
        </div>
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-medium">
                <div class="uk-width-large-1-4 uk-visible-large">
                    <aside class="aside">

                        @include('ngocdiep::pages.danhmucsanpham')

                        @include('ngocdiep::pages.danhmucmail')

                        @include('ngocdiep::pages.tinnoibat')

                    </aside><!-- .aside -->
                </div>
                <div class="uk-width-large-3-4">
                    <section class="artcatalogue">
                        <header class="panel-head">
                            <h1 class="heading"><span>Tin tức</span></h1>
                        </header>
                        <section class="panel-body">
                            <ul class="uk-list list-article">

                                @foreach($tintucs as $item)
                                <li>
                                    <article class="article uk-clearfix">
                                        <div class="thumb img-flash">
                                            <a class="image img-cover" href="{{ route('tintuc', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item['title'] }}">
                                                <img src="{{ asset('/').$item['image']['url'] }}" alt="{{ $item['title'] }}">
                                            </a>
                                        </div>
                                        <div class="infor">
                                            <h3 class="title">
                                                <a href="{{ route('tintuc', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item['title'] }}">
                                                    {{ $item['title'] }}
                                                </a>
                                            </h3>
                                            <div class="description">
                                                {!! $item['description'] !!}
                                            </div>
                                            <div class="date-time">
                                                <i>{{ date_format(date_create($item['updated_at']),"d-m-Y") }}</i>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                                @endforeach

                            </ul>
                        </section><!-- .panel-body -->

                        {{ $tintucs->links() }}
                        {{--<div class="pagination mb30"><ul class="uk-pagination uk-pagination-right"><li class="uk-active"><a>1</a></li><li><a href="http://ngocdiep.vn/tin-tuc/trang-2.html" data-ci-pagination-page="2" rel="start">2</a></li><li><a href="http://ngocdiep.vn/tin-tuc/trang-3.html" data-ci-pagination-page="3">3</a></li><li><a href="http://ngocdiep.vn/tin-tuc/trang-2.html" data-ci-pagination-page="2" rel="next"><i class="fa fa-angle-double-right"></i></a></li><li><a href="http://ngocdiep.vn/tin-tuc/trang-20.html" data-ci-pagination-page="20">Trang Cuối ›</a></li></ul></div>									--}}
                    </section><!-- .article-catalogue -->
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
