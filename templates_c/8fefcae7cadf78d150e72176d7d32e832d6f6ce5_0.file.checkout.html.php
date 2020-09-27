<?php
/* Smarty version 3.1.30, created on 2017-03-11 18:29:09
  from "C:\OpenServer\domains\intermag\templates\checkout.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c417c5be7054_51448959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fefcae7cadf78d150e72176d7d32e832d6f6ce5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\intermag\\templates\\checkout.html',
      1 => 1489246145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58c417c5be7054_51448959 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <body>
        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="container">
            <div class="check">	 
                <div class="col-md-3 cart-total">
                    <a class="continue" href="#">Continue to basket</a>
                    <div class="price-details">
                        <h3>Price Details</h3>
                        <span>Total</span>
                        <span class="total1 simpleCart_total"></span>
                        <span>Discount</span>
                        <span class="total1">---</span>
                        <span>Delivery Charges</span>
                        <span class="total1"></span>
                        <div class="clearfix"></div>				 
                    </div>	
                    <ul class="total_price">
                        <li class="last_price"> <h4>TOTAL</h4></li>	
                        <li class="last_price simpleCart_total"><span></span></li>
                        
                    </ul>


                    <div class="clearfix"></div>
                    <a class="order" href="#">Place Order</a>
                    <div class="total-item">
                        <h3>OPTIONS</h3>
                        <h4>COUPONS</h4>
                        <a class="cpns" href="#">Apply Coupons</a>
                        <p><a href="#">Log In</a> to use accounts - linked coupons</p>
                    </div>
                </div>
                
                <div class="col-md-9 cart-items">
                    <h1>Корзина товаров</h1>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartarray']->value, 'prod');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->value) {
?>
                    <div class="cart-header">
                        <div class="myclose" data-id="<?php echo $_smarty_tpl->tpl_vars['prod']->value['infor']['id'];?>
"> </div>
                        <div class="cart-sec simpleCart_shelfItem">
                            
                            <div class="cart-item cyc">
                                <img src="/views/images/products/<?php echo $_smarty_tpl->tpl_vars['prod']->value['infor']['foto'][0];?>
" class="img-responsive" alt=""/>
                            </div>
                            <div class="cart-item-info">
                                <h3><a href="/single/<?php echo $_smarty_tpl->tpl_vars['prod']->value['infor']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['prod']->value['infor']['name'];?>
</a><span><?php echo $_smarty_tpl->tpl_vars['prod']->value['infor']['price'];?>
</span></h3>
                                <?php if ($_smarty_tpl->tpl_vars['prod']->value['infor']['issize'] == 1) {?>
                                <ul class="qty">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prod']->value['infor']['sizes'], 'size');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
?>
                                    <li><p>Size : <?php echo $_smarty_tpl->tpl_vars['size']->value;?>
</p></li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                                    
                                </ul>
                                <?php }?>

                                <div class="delivery">
                                    <p>Service Charges : Rs.100.00</p>
                                    <span>Delivered in 2-3 bussiness days</span>
                                    <div class="clearfix"></div>
                                </div>	
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html><?php }
}
