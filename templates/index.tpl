<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <!--{include file='head.tpl'}--> 

    <body> 

        <!--{include file='header.tpl'}-->    

        <!--{include file='banner.tpl'}-->

        <div class="content">
            <div class="container">
                <div class="content-top">
                    <h2 class="new">НОВЫЕ</h2>
                    <div class="pink">
                        <!-- requried-jsfiles-for owl -->
                        <link href="/views/css/owl.carousel.css" rel="stylesheet">
                        <script src="/views/scripts/owl.carousel.js"></script>
                        <script>
                            $(document).ready(function () {
                                $("#owl-demo").owlCarousel({
                                    items: 4,
                                    lazyLoad: true,
                                    autoPlay: true,
                                    pagination: true,
                                });
                            });
                        </script>
                        <!-- //requried-jsfiles-for owl -->
                        <div id="owl-demo" class="owl-carousel text-center">
                            <!--{foreach from=$newproducts item=$value}-->
                            <div class="item">                               
                                <div class=" box-in">
                                    <div class=" grid_box">		
                                        <a href="single/<!--{$value.id}-->" >
                                            <img src="/views/images/products/<!--{$value.foto[0]}-->" class="img-responsive" alt="">
                                            <div class="zoom-icon">
                                                <!--{if $value.sizes|@count >0}-->
                                                <ul class="in-by">
                                                    <li><h5>sizes:</h5></li>
                                                    <!--{foreach from=$value.sizes item=$size}-->
                                                    <li><span><!--{$size}--></span></li>
                                                    <!--{/foreach}-->                                                    
                                                </ul>
                                                <!--{/if}-->
                                                <!--{if $value.colors|@count >0}-->
                                                <ul class="in-by-color">
                                                    <li><h5>colors:</h5></li>
                                                    <!--{foreach from=$value.colors item=$color}-->                                                    
                                                    <li><span class="color" style="background:#<!--{$color}-->"></span></li>
                                                    <!--{/foreach}-->
                                                </ul>
                                                <!--{/if}-->
                                            </div> 
                                        </a> 	
                                    </div>
                                    <!---->
                                    <div class="grid_1 simpleCart_shelfItem">
                                        <a href="#" class="cup item_add"><span class=" item_price" ><!--{$value.price}--><i> </i> </span></a>					
                                    </div>
                                    <!---->
                                </div>                               
                            </div>
                            <!--{/foreach}-->                            
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                </div>

                <!---->
                <div class="content-middle">
                    <h2 class="middle">ПРОДАЖИ</h2>
                    <div class="col-best">
                        <!--{foreach from=$bestproducts item=$value}-->
                        <div class="col-md-4">
                            <a href="single/<--{$value.id}-->">
                                <div class="col-in">
                                    <div class="col-in-left">
                                        <img src="/views/images/products/<!--{$value.foto[0]}-->" class="img-responsive" alt=""/>
                                    </div>
                            
                                    <div class="col-in-right grid_1 simpleCart_shelfItem">
                                        <h5><!--{$value.smalldiscription}--></h5>
                                        <ul class="star">
                                            <li><a href="#"><i> </i> </a> </li>
                                            <li><a href="#"><i> </i> </a> </li>
                                            <li><a href="#"><i> </i> </a> </li>
                                            <li><i class="in-star"> </i>  </li>
                                        </ul>
                                        <!---->
                                        <a href="#" class="item_add"><span class="white item_price" ><!--{$value.price}--><i> </i> </span></a>
                                        <!---->
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </a>
                        </div>
                        <!--{/foreach}-->
                        <div class="clearfix"> </div>
                    </div>
                </div>
            <!---->

    <div class="content-bottom">
        <div class="col-md-8 latter">
            <h6>NEWSLETTER</h6>
            <p>sign up now to our newsletter discount! to get the Welcome discount</p>

            <div class="clearfix"> </div>
        </div>
        <div class="col-md-4 latter-right">

            <form>
                <div class="join">
                    <input type="text" value="your email here" onfocus="this.value = '';" onblur="if (this.value == '') {
                                this.value = 'your email here';
                            }">
                    <i> </i>
                </div>
                <input type="submit" value="join us">
            </form>

        </div>
        <div class="clearfix"> </div>
    </div>

</div>
</div>

<!--{include file="footer.tpl"}-->

</body>
</html>