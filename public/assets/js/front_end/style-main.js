$(document).ready(function(){
    $('.search-top').click(function(e) {
        e.preventDefault();
        if ($('.form_search').css('display') == 'none') {
            $('.form_search').show();
        }
        else {
            $('.form_search').hide();
        }
    });
});
//-------------render_size--------------------//

$( window ).load(function() {
    render_size();
    var url = window.location.href;
    $('.menu-item  a[href="' + url + '"]').parent().addClass('active');
});

$( window ).resize(function() {
    render_size();
});
function render_size(){
    var h_976 = $('.h_976 img').width();
    $('.h_976 img').height( 0.976 * parseInt(h_976));


    var h_56 = $('.h_56 img').width();
    $('.h_56 img').height( 0.56 * parseInt(h_56));

    var h_727 = $('.h_727 img').width();
    $('.h_727 img').height( 0.727 * parseInt(h_727));

    var h_92 = $('.h_92 img').width();
    $('.h_92 img').height( 0.921 * parseInt(h_92));


}
//-------------------scroll------------------------//
$(window).scroll(function () {
    if ($(window).scrollTop() >=200) {
        $('#scroll_top').show();
    }
    else {
        $('#scroll_top').hide();
    }
});
$('#scroll_top').click(function(){
    jQuery('html, body').animate({scrollTop:parseInt(0)}, 'slow');
});


if (window.innerWidth > 768) {
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 200) {
            $('.sticky-header').addClass('fixed');
        } else {
            $('.sticky-header').removeClass('fixed');
        }
    });
}


