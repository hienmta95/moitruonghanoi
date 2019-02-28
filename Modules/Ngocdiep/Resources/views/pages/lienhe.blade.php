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
                                <h2 class="company">{{ $info[$tencongty] }}</h2>
                                <div class="address">
                                </div>
                                <div class="contact-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11841.746621813008!2d105.93802450073834!3d21.01299398020593!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x596b302b040fadcf!2zQ8O0bmcgdHkgY-G7lSBwaOG6p24gY8O0bmcgbmdo4buHIHbDoCBtw7RpIHRyxrDhu51uZyBow6AgbuG7mWk!5e0!3m2!1svi!2s!4v1551198532941" width="600" height="600" frameborder="450" style="border:0" allowfullscreen></iframe>
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
                                            <input type="text" name="hoten" value="" class="uk-width-1-1 input-text" placeholder="{{ __('Họ và tên') }} *">
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="email" value="" class="uk-width-1-1 input-text" placeholder="Email *">
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="sdt" value="" class="uk-width-1-1 input-text" placeholder="{{ __('Số điện thoại') }} *">
                                        </div>
                                        <div class="form-row">
                                            <input type="text" name="diachi" value="" class="uk-width-1-1 input-text" placeholder="{{ __('Địa chỉ') }} *">
                                        </div>
                                    </div><!-- end .uk-grid -->
                                    <div class="form-row">
                                        <textarea name="noidung" value="" class="uk-width-1-1 form-textarea" style="height: 175px;" placeholder="{{ __('Nội dung') }} *"></textarea>
                                    </div>
                                    <div class="form-row uk-text-right">
                                        <input type="submit" name="create" class="btn-submit" value="{{ __('Gửi thông tin') }}">
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
