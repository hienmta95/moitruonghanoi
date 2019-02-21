@extends('frontend::master')

@section('page_title', 'Liên hệ')

@section('body_class', 'lienhe')

@section('styles')

@endsection

@section('sliders')
    @include('frontend::pages.slide')
@endsection

@section('content')

    <article class="bg-article">
        <div class="intro-dcs clearfix">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20044.259350417342!2d106.1182120479321!3d20.880900851320074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135bd30c781fbb3%3A0x66c7b4e36c3019cd!2zQ2jDuWEgUGjDumMgTMOibSAoTGEgTcOhdCk!5e0!3m2!1svi!2s!4v1550511337789" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </article>

    <article class="bg-article">
        <div class="container">
            <div class="row row-7">
                <div class="col-md-12 pdd-7">
                    <ul class="breadcrumb">
                        <li><a href="{{ route('homepage') }}">Trang chủ</a></li>
                        <li class="active"><a href="{{ route('frontend.lienhe') }}">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 pdd-7">
                    <h2 class="title-right">
                    <span>
                        Liên hệ
                    </span>
                    </h2>
                    <div class="clearfix" style="width:100%; height: 20px;float:left"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12 col-480 pdd-7">
                        <div class="intro-home col-md-12">
                            <div class="intro-dcs clearfix">
                                <form action="" method="post" class="validate form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="control-label hidden">Họ tên </label>
                                        <div class="controls">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i style="font-size:15px;" class="fa fa-user"></i></span>
                                                <input type="text" style="z-index: 0;" name="full_name" class="validate[required] form-control placeholder" id="personName" placeholder="Họ tên " data-bind="value: name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label hidden">Điện thoại</label>
                                        <div class="controls">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i style="font-size:20px;" class="fa fa-mobile"></i></span>
                                                <input name="phone" class="validate[required,custom[phone]] form-control placeholder" id="phone" data-original-title="Your activation email will be sent to this address." data-bind="value: email, event: { change: checkDuplicateEmail }" type="text" style="z-index: 0;" placeholder="Điện thoại">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label hidden">Email</label>
                                        <div class="controls">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i style="font-size:10px;" class="fa fa-envelope-o"></i></span>
                                                <input type="text" style="z-index: 0;" placeholder="Email" name="email" class="validate[required,custom[email]] form-control placeholder" id="personEmail" data-original-title="Your activation email will be sent to this address." data-bind="value: email, event: { change: checkDuplicateEmail }">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label hidden">Địa chỉ</label>
                                        <div class="controls">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i style="font-size:10px;" class="fa fa-home"></i></span>
                                                <input type="text" style="z-index: 0;" placeholder="Địa chỉ" name="address" class="validate[required] form-control placeholder" id="personName" data-bind="value: name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label hidden">Nội dung</label>
                                        <div class="controls">
                                            <div class="input-group" style="z-index: 0;">
                                                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                <textarea name="comment" class="form-control placeholder" rows="4" cols="78" placeholder="Nội dung"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="controls" style="margin-left: 40%;margin-bottom:20px">
                                        <input type="submit" name="sendcontact" id="signupuser" class="btn btn-primary btn-sm" value="Gửi đi">
                                        <input type="reset" id="mybtn" class="btn btn-primary btn-sm" value="Nhập lại">
                                    </div><!--end form-contact-->
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 col-480 pdd-7">
                        <div class="intro-home col-md-12">
                            <div class="margin-bottom text-justify">
                                <div style="margin-top:15px; margin-left:30px"><span style="color:rgb(255, 0, 0); font-size: 18px;">CÔNG TY CỔ PHẦN CÔNG NGHỆ VÀ MÔI TRƯỜNG HÀ NỘI</span></div>

                                <div style="margin-top:10px; margin-left:30px; font-size: 15px;">Địa chỉ: Số 14 - Đường A – Thành Trung – Trâu Qùy – Gia Lâm – Hà nội</div>

                                <div style="margin-top:10px; margin-left:30px; font-size: 15px;">Điện thoại: 04.62932798 | 38760436</div>

                                <div style="margin-top:10px; margin-left:30px; font-size: 15px;"><strong>Email</strong>: moitruonghanoi@gmail.com</div>

                                <div style="margin-top:10px; margin-left:30px; font-size: 15px;"><strong>Website</strong>:&nbsp;<a href="{{ route('homepage') }}" target="_self"><span style="color:rgb(255, 0, 0);">{{ route('homepage') }}</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </article>
    <!-- End Main -->

@endsection

@section('scripts')
    <script>
        (function ( $ ) {

        })(jQuery);
    </script>
@endsection
