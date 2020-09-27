<?php
/* Smarty version 3.1.30, created on 2017-03-11 11:15:59
  from "C:\OpenServer\domains\intermag\templates\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c3b23faf0254_85459044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64edb1d93b14b9a77979696a92693c901687e9d3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\intermag\\templates\\head.tpl',
      1 => 1489220138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c3b23faf0254_85459044 (Smarty_Internal_Template $_smarty_tpl) {
?>
<head>
        <title>Магазин комерческих товаров</title>
        <link href="/views/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="/views/css/pages.css" rel="stylesheet" type="text/css"/>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <?php echo '<script'; ?>
 src="/views/scripts/jquery.min.js"><?php echo '</script'; ?>
>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href="/views/css/style.css" rel="stylesheet" type="text/css" media="all" />	
        <!--/theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Markito Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <?php echo '<script'; ?>
 type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } <?php echo '</script'; ?>
>
        <!--fonts-->
        <link href='http://fonts.googleapis.com/css?family=Amaranth:400,700' rel='stylesheet' type='text/css'>
        <!--/fonts-->
        <?php echo '<script'; ?>
 type="text/javascript" src="/views/scripts/move-top.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/views/scripts/easing.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
                });
            });
        <?php echo '</script'; ?>
>
        <!-- start menu -->
        <link href="/views/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
        <?php echo '<script'; ?>
 type="text/javascript" src="/views/scripts/megamenu.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>$(document).ready(function () {
        $(".megamenu").megamenu();
    });<?php echo '</script'; ?>
>
   
        <?php echo '<script'; ?>
 type="text/javascript" src="/views/scripts/myJavaScript.js"><?php echo '</script'; ?>
>
        <!--<?php echo '<script'; ?>
 src="/views/scripts/simpleCart.min.js"><?php echo '</script'; ?>
>-->
        
    </head>
<?php }
}
