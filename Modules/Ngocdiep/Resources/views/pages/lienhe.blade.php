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
                            {{ __('Liên hệ') }}					</a>
                    </li>
                </ul>
            </div>
        </div><!-- end .breadcrumb -->
        <div class="uk-container uk-container-center">
            <section class="uk-panel contact">
                <section class="panel-body">
                    <div class="uk-grid uk-grid-medium">
                        <div class="uk-width-large-1-3 uk-width-xlarge-3-4">
                            <div class="contact-infomation">
                                <div class="note">{{ __('Cám ơn quý khách đã ghé thăm website chúng tôi..') }}</div>
                                <h2 class="company">CÔNG TY CỔ PHẦN CÔNG NGHỆ VÀ MÔI TRƯỜNG HÀ NỘI</h2>
                                <div class="address">
                                </div>
                                <div class="contact-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d4339.170983354533!2d105.93302807679243!3d21.010982350891318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zU-G7kSAxNCAtIMSQxrDhu51uZyBBIOKAkyBUaMOgbmggVHJ1bmcg4oCTIFRyw6J1IFHDuXkg4oCTIEdpYSBMw6JtIOKAkyBIw6AgbuG7mWk!5e0!3m2!1svi!2s!4v1550744206915" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-large-1-3 uk-width-xlarge-1-4">
                            <div class="contact-form">
                                <div class="label" style="word-break: break-word;
    text-align: left;
    display: inline-block;
    padding-left: 0px;
    white-space: normal;
    font-weight: normal;">{{ __('Vui lòng nhập đầy đủ thông tin dưới đây, chúng tôi sẽ liên hệ với quý khách trong thời gian sớm nhất.') }}</div>
                                <form action="{{ route('post.lienhe') }}" method="post" class="uk-form form">
                                    @csrf
                                    <div class="uk-grid lib-grid-20 uk-grid-width-small-1-2 uk-grid-width-large-1-1">
                                        <div class="form-row">
                                            <input type="text" name="hoten" value="" class="uk-width-1-1 input-text" placeholder="Họ và tên *">
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="email" value="" class="uk-width-1-1 input-text" placeholder="Email *">
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="sdt" value="" class="uk-width-1-1 input-text" placeholder="Số điện thoại *">
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="diachi" value="" class="uk-width-1-1 input-text" placeholder="Địa chỉ *">
                                        </div>
                                    </div><!-- end .uk-grid -->
                                    <div class="form-row">
                                        <textarea name="noidung" value="" class="uk-width-1-1 form-textarea" style="height: 175px;" placeholder="Nội dung *"></textarea>
                                    </div>
                                    <div class="form-row uk-text-right">
                                        <input type="submit" name="create" class="btn-submit" value="Gửi thông tin">
                                    </div>
                                </form><!-- end .form -->
                            </div><!-- end .contacts -->
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
