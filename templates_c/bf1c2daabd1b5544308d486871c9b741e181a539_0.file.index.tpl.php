<?php
/* Smarty version 3.1.30, created on 2017-03-11 11:47:50
  from "C:\OpenServer\domains\intermag\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c3b9b61eb7c9_54530405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf1c2daabd1b5544308d486871c9b741e181a539' => 
    array (
      0 => 'C:\\OpenServer\\domains\\intermag\\templates\\index.tpl',
      1 => 1487273127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:banner.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58c3b9b61eb7c9_54530405 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 

    <body> 

        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    

        <?php $_smarty_tpl->_subTemplateRender("file:banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div class="content">
            <div class="container">
                <div class="content-top">
                    <h2 class="new">НОВЫЕ</h2>
                    <div class="pink">
                        <!-- requried-jsfiles-for owl -->
                        <link href="/views/css/owl.carousel.css" rel="stylesheet">
                        <?php echo '<script'; ?>
 src="/views/scripts/owl.carousel.js"><?php echo '</script'; ?>
>
                        <?php echo '<script'; ?>
>
                            $(document).ready(function () {
                                $("#owl-demo").owlCarousel({
                                    items: 4,
                                    lazyLoad: true,
                                    autoPlay: true,
                                    pagination: true,
                                });
                            });
                        <?php echo '</script'; ?>
>
                        <!-- //requried-jsfiles-for owl -->
                        <div id="owl-demo" class="owl-carousel text-center">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newproducts']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <div class="item">                               
                                <div class=" box-in">
                                    <div class=" grid_box">		
                                        <a href="single/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" >
                                            <img src="/views/images/products/<?php echo $_smarty_tpl->tpl_vars['value']->value['foto'][0];?>
" class="img-responsive" alt="">
                                            <div class="zoom-icon">
                                                <?php if (count($_smarty_tpl->tpl_vars['value']->value['sizes']) > 0) {?>
                                                <ul class="in-by">
                                                    <li><h5>sizes:</h5></li>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['sizes'], 'size');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
?>
                                                    <li><span><?php echo $_smarty_tpl->tpl_vars['size']->value;?>
</span></li>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                                                    
                                                </ul>
                                                <?php }?>
                                                <?php if (count($_smarty_tpl->tpl_vars['value']->value['colors']) > 0) {?>
                                                <ul class="in-by-color">
                                                    <li><h5>colors:</h5></li>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['colors'], 'color');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
?>                                                    
                                                    <li><span class="color" style="background:#<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
"></span></li>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                </ul>
                                                <?php }?>
                                            </div> 
                                        </a> 	
                                    </div>
                                    <!---->
                                    <div class="grid_1 simpleCart_shelfItem">
                                        <a href="#" class="cup item_add"><span class=" item_price" ><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
<i> </i> </span></a>					
                                    </div>
                                    <!---->
                                </div>                               
                            </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                            
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                </div>

                <!---->
                <div class="content-middle">
                    <h2 class="middle">ПРОДАЖИ</h2>
                    <div class="col-best">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bestproducts']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <div class="col-md-4">
                            <a href="single/<--{$value.id}-->">
                                <div class="col-in">
                                    <div class="col-in-left">
                                        <img src="/views/images/products/<?php echo $_smarty_tpl->tpl_vars['value']->value['foto'][0];?>
" class="img-responsive" alt=""/>
                                    </div>
                            
                                    <div class="col-in-right grid_1 simpleCart_shelfItem">
                                        <h5><?php echo $_smarty_tpl->tpl_vars['value']->value['smalldiscription'];?>
</h5>
                                        <ul class="star">
                                            <li><a href="#"><i> </i> </a> </li>
                                            <li><a href="#"><i> </i> </a> </li>
                                            <li><a href="#"><i> </i> </a> </li>
                                            <li><i class="in-star"> </i>  </li>
                                        </ul>
                                        <!---->
                                        <a href="#" class="item_add"><span class="white item_price" ><?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
<i> </i> </span></a>
                                        <!---->
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </a>
                        </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html><?php }
}
