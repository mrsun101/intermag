<?php
/* Smarty version 3.1.30, created on 2017-03-19 16:24:59
  from "C:\OpenServer\domains\intermag\templates\admin\formenter.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ce86ab5af647_61302553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b33d6f24b57b177c3d04e1b2a6005eb91a0bdebf' => 
    array (
      0 => 'C:\\OpenServer\\domains\\intermag\\templates\\admin\\formenter.html',
      1 => 1489927361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ce86ab5af647_61302553 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    
    <link href="style.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <form class="form-horizontal" role="form" method="post" action="/admin/enter">
              <div class="form-group has-warning">
                <div class="col-sm-2">
                  <label for="inputEmail3" class="control-label">Почта</label>
                </div>
                <div class="col-sm-10">
                  <input type="email" class="form-control input-lg" id="inputEmail" placeholder="Email">
                </div>
              </div>
              <div class="form-group has-warning">
                <div class="col-sm-2">
                  <label for="inputPassword3" class="control-label">Пароль</label>
                </div>
                <div class="col-sm-10">
                  <input type="password" class="form-control input-lg" id="inputPassword" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-warning" name="buttonenter">Войти</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  

</body></html><?php }
}
