@extends('frontend::master')

@section('page_title', 'MoitruongHanoi - Trang chủ')

@section('body_class', 'homepage')

@section('sliders')
    @include('frontend::pages.slide')
@endsection

@section('styles')

@endsection

@section('content')

    <article>
        <h1 class="hidden">The Leading Plastic Bags Manufacturer and Wholesale Supplier</h1>
        <h2 class="hidden">Moi truong Ha Noi is the Best Solution to Shine Up Your Business</h2>
        <section class="intro bg-fix wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="0.6s">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="box-intro">
                            <h2 class="title-home">
                                CÔNG TY CỔ PHẦN CÔNG NGHỆ VÀ MÔI TRƯỜNG HÀ NỘI                  </h2>
                            <div class="dcs-intro">
                                <p><span style="color:#009900"><strong>C&Ocirc;NG TY CP NHỰA V&Agrave; M&Ocirc;I TRƯỜNG XANH AN PH&Aacute;T</strong></span>&nbsp;được được khởi đầu từ một doanh nghiệp&nbsp;chỉ với 2 th&agrave;nh vi&ecirc;n, vốn điều lệ 500 triệu VND với c&aacute;i t&ecirc;n &ldquo;Anh Hai Duy&rdquo; v&agrave;o th&aacute;ng 9/2002. Chỉ sau 16 năm, c&ocirc;ng ty đ&atilde; trở th&agrave;nh c&ocirc;ng ty đại ch&uacute;ng ni&ecirc;m yết tr&ecirc;n s&agrave;n chứng kho&aacute;n HOSE (m&atilde; chứng kho&aacute;n AAA) với số vốn điều lệ hơn 1.711 tỷ đồng, doanh thu năm 2018 ước đạt tr&ecirc;n 6.000 tỷ đồng.</p>

                                <p>L&agrave; một doanh nghiệp c&oacute; nhiều năm kinh nghiệm trong lĩnh vực sản xuất bao b&igrave; m&agrave;ng mỏng, C&ocirc;ng ty hiện đ&atilde; c&oacute; được một vị tr&iacute; vững chắc trong hoạt động kinh doanh, thiết lập được mối quan hệ kinh doanh tốt đẹp với nhiều C&ocirc;ng ty v&agrave; tập đo&agrave;n nổi tiếng ở Ch&acirc;u &Acirc;u, Ch&acirc;u Mỹ, C&aacute;c tiểu vương quốc Ả Rập, Nhật Bản, H&agrave;n Quốc, Singapore, Đ&agrave;i Loan,&hellip; Sản phẩm được c&aacute;c doanh nghiệp trong nước v&agrave; quốc tế đ&aacute;nh gi&aacute; cao.</p>
                            </div>
                            <a  href="/" class="view-intro  ">[Xem thêm...]</a>
                        </div>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </section>

        <div class="clearfix"></div>
        <section class="bg-white border-none prod-home wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">
            <div class="container">
                <div class="row">
                    <h2 class="title-home title-fix">
                        Các công nghệ chính do chúng tôi cung cấp
                    </h2>

                    <div class="slider-prod-home owl-carousel owl-themxe">
                        @foreach($loaicongnghe as $item)
                            <div class="item">
                                <div class="box-prod-home">
                                    <div class="img-prod-home h_9761">
                                        <a href="{{ route('homepage') }}" ><img class="w_100" src="{{ asset('/').$item['image']['url'] }}" alt="{{ $item['title'] }}"></a>

                                    </div>
                                    <div class="dcs-prod-home">
                                        <h3 class="name-prod-home" style="height:40px">
                                            <a href="{{ route('homepage') }}">{{ $item['title'] }}</a>
                                        </h3>
                                        <div class="clearfix"></div>
                                        <a class="view-prod btn" href="{{ route('homepage') }}">Chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <div class="clearfix"></div>

        <section class="bg-gray support wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s" style="padding-bottom: 90px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title-home title-fix-2 wow fadeInLeft" data-wow-duration="0.6s" data-wow-delay="0.6s">
                            <a href="{{ route('homepage') }}">Tin Tức</a>&nbsp;
                        </h2>
                        <div class="slider-new owl-carousel owl-theme tintuc-home">
                            @foreach($tintuc as $item)
                                <div class="item wow zoomInRight" data-wow-duration="0.6s" data-wow-delay="0.6s">
                                    <div class="item">
                                        <div class="box_news">
                                            <a href="/" class="img_news h_63" title="{{ $item['title'] }}">
                                                <img src="{{ asset('/').$item['image']['url'] }}" alt="{{ $item['title'] }}"/>
                                            </a>
                                            <div class="sub_news">
                                                <h3 class="name_news"><a href="/" title="{{ $item['title'] }}">{{ $item['title'] }}</a></h3>
                                                <div class="des_news">
                                                    <a href=""></a>
                                                    {!! $item['description'] !!}
                                                </div>
                                                <div class="comment">
                                                    <span class="lich"><img src="{{ asset('/assets/img/lich.png') }}" alt="">01/02/2019</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="clearfix"></div>

        {{--<section class="partner">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<h2 class="title-home title-fix-2 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">--}}
                            {{--Đối tác khách hàng                </h2>--}}
                        {{--<div class="slider-dt owl-carousel owl-theme">--}}
                            {{--<div class="item wow zoomIn"  data-wow-delay=".2s" data-wow-duration="1s" >--}}
                                {{--<a href="http://www.anphatplastic.com/" title="Sabic"><img c src="http://www.anphatplastic.com/upload/img/banner/sabic-anphat-plastic-logo.png" alt="Sabic"/></a>--}}
                            {{--</div>--}}
                            {{--<div class="item wow zoomIn"  data-wow-delay=".2s" data-wow-duration="1s" >--}}
                                {{--<a href="http://www.anphatplastic.com/" title="đối tác 3"><img c src="http://www.anphatplastic.com/upload/img/banner/misubishi-anphat-plastic-logo.png" alt="đối tác 3"/></a>--}}
                            {{--</div>--}}
                            {{--<div class="item wow zoomIn"  data-wow-delay=".2s" data-wow-duration="1s" >--}}
                                {{--<a href="http://www.anphatplastic.com/" title="Chevron Philips"><img c src="http://www.anphatplastic.com/upload/img/banner/chevron-phillips-anphat-plastic-logo.png" alt="Chevron Philips"/></a>--}}
                            {{--</div>--}}
                            {{--<div class="item wow zoomIn"  data-wow-delay=".2s" data-wow-duration="1s" >--}}
                                {{--<a href="http://www.anphatplastic.com/" title="BASF"><img c src="http://www.anphatplastic.com/upload/img/banner/basf-anphat-plastic-logo.png" alt="BASF"/></a>--}}
                            {{--</div>--}}
                            {{--<div class="item wow zoomIn"  data-wow-delay=".2s" data-wow-duration="1s" >--}}
                                {{--<a href="http://www.anphatplastic.com/" title="Sasol"><img c src="http://www.anphatplastic.com/upload/img/banner/sasol-anphat-plastic-logo.png" alt="Sasol"/></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</section>--}}
        {{--<div class="clearfix"></div>--}}
    </article>

@endsection

@section('scripts')
    <script>
        (function ( $ ) {

        })(jQuery);
    </script>
@endsection
