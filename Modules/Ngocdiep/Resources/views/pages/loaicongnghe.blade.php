@extends('ngocdiep::master')

@section('page_title')
    {{ $loaicongngheDetail[$title] }}
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

    <div id="productcatalogue-page" class="page-body">
        <div class="breadcrumb">
            <div class="uk-container uk-container-center">
                <ul class="uk-breadcrumb">
                    <li>
                        <a href="{{ route('trangchu') }}" title="Trang chủ">
                            <i class="fa fa-home"></i> {{ __('Trang chủ') }}					</a>
                    </li>
                    <li class="uk-active"><a href="{{ route('trangchu') }}" title="Các công nghệ tiên tiến">{{ __('Các công nghệ của chúng tôi') }}</a></li>
                </ul>
            </div>
        </div>

        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-medium">
                <div class="uk-width-large-1-4 uk-visible-large">
                    <aside class="aside">

                        @include('ngocdiep::pages.danhmuccongnghe')

                        @include('ngocdiep::pages.danhmucmail')

                        @include('ngocdiep::pages.tinnoibat')

                    </aside><!-- .aside -->
                </div><!-- .uk-width -->
                <div class="uk-width-large-3-4">

                    <section class="prdcatalogue">
                        <header class="panel-head">
                            <h1 class="heading"><a href="{{ route('loaicongnghe', ['id'=>$loaicongngheDetail['id'], 'slug'=>$loaicongngheDetail['slug']]) }}" title="{{ $loaicongngheDetail[$title] }}">{{ $loaicongngheDetail[$title] }}</a></h1>
                        </header>
                        <section class="panel-body">
                            <ul class="uk-grid uk-grid-small uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-xlarge-1-4 list-products" data-uk-grid-match="{target: '.product .title'}">

                                @foreach($loaicongngheDetail['congnghe'] as $child)
                                    <li>
                                        <div class="product">
                                            <div class="thumb">
                                                <a class="image img-cover" href="{{ route('congnghe', ['id'=>$child['id'], 'slug'=>$child['slug']]) }}" title="{{ $child[$title] }}">
                                                    <img src="{{ asset('/').$child['image']['url'] }}" alt="{{ $child[$title] }}">
                                                </a>
                                            </div>
                                            <div class="infor">
                                                <h3 class="title" style="min-height: 20px;">
                                                    <a href="{{ route('congnghe', ['id'=>$child['id'], 'slug'=>$child['slug']]) }}" title="{{ $child[$title] }}">
                                                        {{ $child[$title] }}													                                            </a>
                                                </h3>
                                                <div class="uk-flex uk-flex-middle uk-flex-space-between meta">
                                                    <div class="brand">
                                                        <img src="{{ asset('/images/entech.png') }}" alt="brand">
                                                    </div>
                                                    <div class="viewmore">
                                                        <a href="{{ route('congnghe', ['id'=>$child['id'], 'slug'=>$child['slug']]) }}" title="{{ $child[$title] }}">
                                                            {{ __('Chi tiết') }} <i class="fa fa-caret-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!-- .infor -->
                                        </div><!-- .product -->
                                    </li>
                                @endforeach

                            </ul>
                        </section> <!-- .product-catalogue -->
                    </section>

                    @foreach($loaicongnghe as $item)
                        @if($loaicongngheDetail['id'] != $item['id'])
                        <section class="prdcatalogue">
                            <header class="panel-head">
                                <h1 class="heading"><a href="{{ route('loaicongnghe', ['id'=>$item['id'], 'slug'=>$item['slug']]) }}" title="{{ $item[$title] }}">{{ $item[$title] }}</a></h1>
                            </header>
                            <section class="panel-body">
                                <ul class="uk-grid uk-grid-small uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-xlarge-1-4 list-products" data-uk-grid-match="{target: '.product .title'}">

                                    @foreach($item['congnghe'] as $child)
                                        <li>
                                            <div class="product">
                                                <div class="thumb">
                                                    <a class="image img-cover" href="{{ route('congnghe', ['id'=>$child['id'], 'slug'=>$child['slug']]) }}" title="{{ $child[$title] }}">
                                                        <img src="{{ asset('/').$child['image']['url'] }}" alt="{{ $child[$title] }}">
                                                    </a>
                                                </div>
                                                <div class="infor">
                                                    <h3 class="title" style="min-height: 20px;">
                                                        <a href="{{ route('congnghe', ['id'=>$child['id'], 'slug'=>$child['slug']]) }}" title="{{ $child[$title] }}">
                                                            {{ $child[$title] }}													                                            </a>
                                                    </h3>
                                                    <div class="uk-flex uk-flex-middle uk-flex-space-between meta">
                                                        <div class="brand">
                                                            <img src="{{ asset('/images/entech.png') }}" alt="brand">
                                                        </div>
                                                        <div class="viewmore">
                                                            <a href="{{ route('congnghe', ['id'=>$child['id'], 'slug'=>$child['slug']]) }}" title="{{ $child[$title] }}">
                                                                {{ __('Chi tiết') }} <i class="fa fa-caret-right"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div><!-- .infor -->
                                            </div><!-- .product -->
                                        </li>
                                    @endforeach

                                </ul>
                            </section> <!-- .product-catalogue -->
                        </section>
                        @endif
                    @endforeach

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