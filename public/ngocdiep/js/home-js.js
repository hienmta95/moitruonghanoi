$(document).ready(function() {
    $('.quantity').change(function(){
        var number = $(this).val();
        $('.ajax-addtocart').attr('data-quantity','');
        $('.ajax-addtocart').attr('data-quantity', number);
    });
    $('.ajax-addtocart').click(function(){
        var product = $(this);
        var modal = UIkit.modal('#modal-cart', {
            bgclose: false,
        });
        // if(module != 'redirect'){
        modal.show();
        $('#modal-cart .cart-content').html('Loading...');
        // }
        $.post('http://ngocdiep.vn/products/ajax/cart/addtocart.html', {
            id : product.attr('data-id'),
            quantity : product.attr('data-quantity'),
        },function(data){
            // if(module == 'redirect'){
            // window.location.href = 'http://ngocdiep.vn/' + 'inquiry' + '.html';
            // }
            var json = JSON.parse(data);
            $('#modal-cart .cart-content').html(json.html);
            $('#ajax-home-cart-quantity').html(json.item);
        });
        return false;
    });

    $(document).on('click', '#ec-module-cart .augment', function(){
        var item = $(this);
        var quantity = parseInt($(this).parent().find('.quantity').val());
        quantity = quantity + 1;
        item.parent().find('.quantity').val(quantity);
        ajax_cart_update();
        return false;
    });

    $(document).on('click', '#ec-module-cart .abate', function(){
        var item = $(this);
        var quantity = parseInt($(this).parent().find('.quantity').val());
        if(quantity <= 1){
            quantity = 1
        } else {
            quantity = quantity - 1;
        }
        item.parent().find('.quantity').val(quantity);
        ajax_cart_update();
        return false;
    });

    $(document).on('click', '#ec-module-cart .delete', function(){
        var item = $(this);
        item.parent().parent().parent().parent().parent().find('.quantity').val(0);
        item.parent().parent().parent().parent().parent().addClass('uk-hidden').removeClass('item');
        ajax_cart_update();
        return false;
    });

    $(document).on('click', '.ec-cart-continue', function(){
        UIkit.modal('#modal-cart').hide();
        return false;
    });

    $('.augment').click(function() {
        var num_order = parseInt($(this).parent().find('.quantity').val());
        num_order += 1;
        $(this).parent().find('.quantity').val(num_order);
    });
    $('.abate').click(function() {
        var cart_class = $(this).attr('data-cart');
        var num_order = parseInt($(this).parent().find('.quantity').val());
        if(num_order <= 1) {
            num_order = 1
        }else {
            num_order -= 1;
        }
        $(this).parent().find('.quantity').val(num_order);
    });
});

function ajax_cart_update(){
    $.post('http://ngocdiep.vn/products/ajax/cart/updatetocart.html', $('#ajax-cart-form').serialize(), function(data){
        var price = JSON.parse(data);
        $('#ajax-cart-form').html(price.html);
    });
    return false;
}

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=128826430843153";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
