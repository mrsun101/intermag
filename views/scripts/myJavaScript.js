$(document).ready(function () {
    $(".item_add").click(function () {
        var id = $(this).attr("data-id");
        $.post("/cart/add/" + id, {}, function (data) {
            var result = JSON.parse(data);
            $(".simpleCart_total").html(result.sum);
            $(".simpleCart_quantity").html(result.count);
        });
        return false;
    });
    $(".simpleCart_empty").click(function () {
        $.post("/cart/clear", {}, function (data) {
            var result = JSON.parse(data);
            $(".simpleCart_total").html(result.sum);
            $(".simpleCart_quantity").html(result.count);
            $('.cart-header').fadeOut('slow', function () {
            $('.cart-header').remove();
            });
        });
         
    });
    
    $('.myclose').click(function () {
        var id = $(this).attr("data-id");
        var obj = this;
        $.post("/cart/sub/"+id,{},function (data){
            var result = JSON.parse(data);
            $(".simpleCart_total").html(result.sum);
            $(".simpleCart_quantity").html(result.count);
            $(obj).closest('.cart-header').fadeOut('slow', function () {
            $(obj).closest('.cart-header').remove();
            });
        });            
    });                        
                
    $.post("/cart/info", {}, function (data) {
        var result = JSON.parse(data);
        $(".simpleCart_total").html(result.sum);
        $(".simpleCart_quantity").html(result.count);
    });
});


