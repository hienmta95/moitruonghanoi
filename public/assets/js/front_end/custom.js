$('.slider-main').owlCarousel({
    loop: true,
    margin: 0,
    stagePadding: 0,
    nav: true,
    dots: true,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    autoplay: true,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    smartSpeed: 3000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});
$('.slider-prod-home').owlCarousel({
    loop: true,
    margin: 30,
    stagePadding: 0,
    nav: false,
    dots: true,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    autoplay: true,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    smartSpeed: 3000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
});
$('.slider-dt').owlCarousel({
    loop: true,
    margin: 75,
    stagePadding: 0,
    nav: true,
    dots: false,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    autoplay: true,
    //animateIn: 'fadeIn',
    //animateOut: 'fadeOut',
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    smartSpeed: 3000,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
});
$('.slider-sp').owlCarousel({
    loop: false,
    margin: 85,
    stagePadding: 0,
    nav: false,
    dots: false,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    autoplay: false,
    //animateIn: 'fadeIn',
    //animateOut: 'fadeOut',
    // autoplayTimeout: 5000,
    autoplayHoverPause: false,
    //smartSpeed: 3000,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
});
$('.slider-new').owlCarousel({
    loop: true,
    margin: 10,
    stagePadding: 0,
    nav: false,
    dots: false,
    navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>', '<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
    autoplay: true,
    //animateIn: 'fadeIn',
    //animateOut: 'fadeOut',
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    smartSpeed: 3000,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 4
        },
        1000: {
            items: 4
        }
    }
});
$('.slider-gioithieu').owlCarousel({
    loop: true,
    margin: 0,
    stagePadding: 0,
    nav: false,
    dots: false,
    navText: ['', ''],
    autoplay: true,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
    smartSpeed: 3000,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});


new WOW().init();

//    window.addEventListener("load",function(){
//        //Lấy vị trí của div đếm số
//        var DivCount = document.getElementsByClassName("experience")[0].offsetTop;
//        var flag = 1;
//        window.addEventListener("scroll", function(event) {
//            var top = this.scrollY;
//            //chuột kéo cách khung đếm 100px thì bắt đầu chạy đếm số
//            if(DivCount < top + 500 ){
//                if(flag == 1)
//                    runNumber();
//                flag = 2;
//            }
//        })
//    })
//
//    function runNumber(){
//        console.log(1);
//        <!-- chạy số -->
//        $('.count').each(function () {
//            $(this).prop('Counter', 0).animate({
//                Counter: $(this).text()
//            }, {
//                duration: 4000,
//                easing: 'swing',
//                step: function (now) {
//                    $(this).text(Math.ceil(now));
//                }
//            });
//        });
//    }
