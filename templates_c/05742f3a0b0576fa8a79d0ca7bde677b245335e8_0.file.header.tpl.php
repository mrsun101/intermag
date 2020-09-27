<?php
/* Smarty version 3.1.30, created on 2017-03-11 10:35:32
  from "C:\OpenServer\domains\intermag\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c3a8c4ee1922_68837842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05742f3a0b0576fa8a79d0ca7bde677b245335e8' => 
    array (
      0 => 'C:\\OpenServer\\domains\\intermag\\templates\\header.tpl',
      1 => 1489178163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c3a8c4ee1922_68837842 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--header-->	
<div class="header" >
    <div class="top-header" >		
        <div class="container">
            <div class="top-head" >
                <div class="header-para">
                    <ul class="social-in">
                        <li><a href="#"><i> </i></a></li>						
                        <li><a href="#"><i class="ic"> </i></a></li>
                        <li><a href="#"><i class="ic1"> </i></a></li>

                    </ul>			
                </div>
                <ul class="header-in">
                    <li ><a href="/brends" >  брэнды</a></li>
                    <li><a href="/error">о магазине</a> </li>
                    <li><a href="/contact">   контакты</a></li>
                    <li ><a href="#" >   как пользоваться</a></li>
                </ul>
                <div class="search-top">
                    <div class="search">
                        <form>
                            <input type="text" value="поиск товаров ?" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'поиск товаров ?';
                                    }" >
                            <input type="submit" value="" >
                        </form>
                    </div>
                    <div class="world">
                        <ul >
                            <li><a href="#"><span> </span></a> </li>
                            <li><select class="in-drop">
                                    <option>RU</option>
                                    <option>EN</option>
                                    <option>DE</option>
                                    <option>ES</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!---->	
    <div class="header-top">
        <div class="container">
            <div class="head-top">
                <div class="logo">
                    <a href="/index"><img src="/views/images/logo.png" alt="" ></a>
                </div>
                <div class="top-nav">		
                    <ul class="megamenu skyblue">
                        <?php
$__section_globalmenu_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_globalmenu']) ? $_smarty_tpl->tpl_vars['__smarty_section_globalmenu'] : false;
$__section_globalmenu_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arraymenu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_globalmenu_0_total = $__section_globalmenu_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_globalmenu'] = new Smarty_Variable(array());
if ($__section_globalmenu_0_total != 0) {
for ($__section_globalmenu_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index'] = 0; $__section_globalmenu_0_iteration <= $__section_globalmenu_0_total; $__section_globalmenu_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index']++){
?>
                        <?php if ($_smarty_tpl->tpl_vars['activgrid']->value == $_smarty_tpl->tpl_vars['arraymenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index'] : null)]['id']) {?>
                        <li class="active grid">
                            <?php } else { ?>
                        <li class="grid">
                            <?php }?>
                            <a  href="#"><?php echo $_smarty_tpl->tpl_vars['arraymenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index'] : null)]['name'];?>
</a>
                            <div class="megapanel">
                                <div class="row">   
                                    <?php
$__section_categorygroupe_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_categorygroupe']) ? $_smarty_tpl->tpl_vars['__smarty_section_categorygroupe'] : false;
$__section_categorygroupe_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arraymenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index'] : null)]['categories']) ? count($_loop) : max(0, (int) $_loop));
$__section_categorygroupe_1_total = $__section_categorygroupe_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_categorygroupe'] = new Smarty_Variable(array());
if ($__section_categorygroupe_1_total != 0) {
for ($__section_categorygroupe_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_categorygroupe']->value['index'] = 0; $__section_categorygroupe_1_iteration <= $__section_categorygroupe_1_total; $__section_categorygroupe_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_categorygroupe']->value['index']++){
?>

                                    <div class="col1">
                                        <div class="h_nav">
                                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_categorygroupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_categorygroupe']->value['index'] : null) == 0) {?>
                                            <h4>Категории</h4>
                                            <?php }?>
                                            <ul> 
                                                <?php
$__section_category_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_category']) ? $_smarty_tpl->tpl_vars['__smarty_section_category'] : false;
$__section_category_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arraymenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index'] : null)]['categories'][(isset($_smarty_tpl->tpl_vars['__smarty_section_categorygroupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_categorygroupe']->value['index'] : null)]) ? count($_loop) : max(0, (int) $_loop));
$__section_category_2_total = $__section_category_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_category'] = new Smarty_Variable(array());
if ($__section_category_2_total != 0) {
for ($__section_category_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_category']->value['index'] = 0; $__section_category_2_iteration <= $__section_category_2_total; $__section_category_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_category']->value['index']++){
?>
                                                <li><a href="/category/<?php echo $_smarty_tpl->tpl_vars['arraymenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index'] : null)]['categories'][(isset($_smarty_tpl->tpl_vars['__smarty_section_categorygroupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_categorygroupe']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_category']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_category']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['arraymenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index'] : null)]['categories'][(isset($_smarty_tpl->tpl_vars['__smarty_section_categorygroupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_categorygroupe']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_category']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_category']->value['index'] : null)]['name'];?>
</a></li>
                                                <?php
}
}
if ($__section_category_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_category'] = $__section_category_2_saved;
}
?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
}
}
if ($__section_categorygroupe_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_categorygroupe'] = $__section_categorygroupe_1_saved;
}
?>

                                    <?php
$__section_brendgroupe_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_brendgroupe']) ? $_smarty_tpl->tpl_vars['__smarty_section_brendgroupe'] : false;
$__section_brendgroupe_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arraymenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index'] : null)]['brends']) ? count($_loop) : max(0, (int) $_loop));
$__section_brendgroupe_3_total = $__section_brendgroupe_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_brendgroupe'] = new Smarty_Variable(array());
if ($__section_brendgroupe_3_total != 0) {
for ($__section_brendgroupe_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_brendgroupe']->value['index'] = 0; $__section_brendgroupe_3_iteration <= $__section_brendgroupe_3_total; $__section_brendgroupe_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_brendgroupe']->value['index']++){
?>
                                    <div class="col1">
                                        <div class="h_nav">   
                                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_brendgroupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_brendgroupe']->value['index'] : null) == 0) {?>
                                            <h4>Популярные бренды</h4>
                                            <?php }?>
                                            <ul> 
                                                <?php
$__section_brend_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_brend']) ? $_smarty_tpl->tpl_vars['__smarty_section_brend'] : false;
$__section_brend_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arraymenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index'] : null)]['brends'][(isset($_smarty_tpl->tpl_vars['__smarty_section_brendgroupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_brendgroupe']->value['index'] : null)]) ? count($_loop) : max(0, (int) $_loop));
$__section_brend_4_total = $__section_brend_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_brend'] = new Smarty_Variable(array());
if ($__section_brend_4_total != 0) {
for ($__section_brend_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_brend']->value['index'] = 0; $__section_brend_4_iteration <= $__section_brend_4_total; $__section_brend_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_brend']->value['index']++){
?>
                                                <li><a href="brend/<?php echo $_smarty_tpl->tpl_vars['arraymenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index'] : null)]['brends'][(isset($_smarty_tpl->tpl_vars['__smarty_section_brendgroupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_brendgroupe']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_brend']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_brend']->value['index'] : null)]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['arraymenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_globalmenu']->value['index'] : null)]['brends'][(isset($_smarty_tpl->tpl_vars['__smarty_section_brendgroupe']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_brendgroupe']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_brend']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_brend']->value['index'] : null)]['name'];?>
</a></li>
                                                <?php
}
}
if ($__section_brend_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_brend'] = $__section_brend_4_saved;
}
?>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
}
}
if ($__section_brendgroupe_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_brendgroupe'] = $__section_brendgroupe_3_saved;
}
?>

                                </div>
                            </div>                                              

                        </li>
                        <?php
}
}
if ($__section_globalmenu_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_globalmenu'] = $__section_globalmenu_0_saved;
}
?>                  


                </div>
                <div class="cart box_1">
                    <a href="/checkout">
                        <h3> <div class="total">
                                <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                            <img src="/views/images/cart.png" alt=""/></h3>
                    </a>
                    <p><a href="#" class="simpleCart_empty"><img src="/views/images/cart-c.png"  alt=""></a></p>
                    <div class="clearfix"> </div>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div><?php }
}
