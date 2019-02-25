@extends('ngocdiep::master')

@section('page_title')
    {{ __('Liên hệ') }}
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

    <div id="contact-page" class="page-body">
        <div class="breadcrumb">
            <div class="uk-container uk-container-center">
                <ul class="uk-breadcrumb">
                    <li>
                        <a href="{{ route('trangchu') }}" title="Trang chủ">
                            <i class="fa fa-home"></i>{{ __('Trang chủ') }}					</a>
                    </li>
                    <li class="uk-active">
                        <a href="{{ route('lienhe') }}" title="Liên hệ">
                            {{ __('Liên hệ') }}				</a>
                    </li>
                </ul>
            </div>
        </div><!-- end .breadcrumb -->
        <div class="uk-container uk-container-center">
            <section class="uk-panel contact">
                <section class="panel-body">
                    <div class="uk-grid uk-grid-medium">
                        <div class="uk-width-large-1-3 uk-width-xlarge-1-1">
                            <div class="contact-infomation">
                                <div class="note" style="    padding: 50px 10px;
    font-size: 25px;
    text-align: center;
    background: #eee;">{{ __('Liên hệ của bạn đã được gửi đi, chúng tôi sẽ liên hệ lại với bạn trong thời gian gần nhất.') }}</div>
                                <h2 class="company">CÔNG TY CỔ PHẦN CÔNG NGHỆ VÀ MÔI TRƯỜNG HÀ NỘI</h2>
                                <div class="address">
                                    {{ $info['truso'] }}
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        (function ( $ ) {

        })(jQuery);
    </script>
@endsection
