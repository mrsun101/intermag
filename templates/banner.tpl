<!--banner-->
<div class="banner">
    <div class="container">	
        <div class="wmuSlider example1">
            <div class="wmuSliderWrapper">
                <!--{foreach from=$discountarray item=$value}-->
                <article style="position: absolute; width: 100%; opacity: 0;"> 
                    <div class="banner-wrap">

                        <div class="banner-top">
                            <a href="single/<!--{$value.id}-->">
                                <div class="banner-top-in">
                                    <img src="/views/images/products/<!--{$value.foto[0]}-->" class="img-responsive" alt="">
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add" data-id="<!--{$value.id}-->"><span class="item_price" ><!--{$value.price}--> <i> </i> </span></div>
                                <div class="off">
                                    <label><!--{$value.discount}--></label>
                                    <p><!--{$value.fullname}--></p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                        </div>
                        <!--<div class="banner-top banner-bottom">-->
                        <div class="banner-top">
                            <a href="single/<!--{$value[id]}-->">
                                <div class="banner-top-in at">
                                    <img src="/views/images/products/<!--{$value.foto[1]}-->" class="img-responsive" alt="">
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add" data-id="<!--{$value.id}-->" ><span class="item_price" ><!--{$value.price}--><i> </i> </span></div>
                                <div class="off">
                                    <label><!--{$value.discount}--></label>
                                    <p><!--{$value.fullname}--></p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                        </div>

                        <div class="clearfix"> </div>

                    </div>
                </article>
                <!--{/foreach}-->                
            </div>
            <ul class="wmuSliderPagination">
                <li><a href="#" class="">0</a></li>
                <li><a href="#" class="">1</a></li>
                <li><a href="#" class="wmuActive">2</a></li>
            </ul>
        </div>
        <!---->
        <script src="/views/scripts/jquery.wmuSlider.js"></script> 
        <script>
            $('.example1').wmuSlider({
                pagination: true,
                nav: false,
            });
        </script> 	

    </div>   
</div>
