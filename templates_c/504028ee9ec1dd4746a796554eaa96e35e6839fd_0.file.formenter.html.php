<?php
/* Smarty version 3.1.30, created on 2017-03-29 18:24:38
  from "C:\OpenServer\domains\intermag\templates\admin\formenter.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dbd1b6ec0962_78392946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '504028ee9ec1dd4746a796554eaa96e35e6839fd' => 
    array (
      0 => 'C:\\OpenServer\\domains\\intermag\\templates\\admin\\formenter.html',
      1 => 1490801076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dbd1b6ec0962_78392946 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo '<script'; ?>
 type="text/javascript" src="/views/js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/views/js/bootstrap.min.js"><?php echo '</script'; ?>
>    
    
    <link href="/views/admin/css/style.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <form class="form-horizontal" role="form" method="post" action="/admin/enter">
              <div class="form-group has-warning">
                <div class="col-sm-2">
                  <label for="inputEmail" class="control-label">Почта</label>
                </div>
                <div class="col-sm-10">
                  <input type="email" class="form-control input-lg" id="inputEmail" name="inputEmail" placeholder="Email">
                </div>
              </div>
              <div class="form-group has-warning">
                <div class="col-sm-2">
                  <label for="inputPassword3" class="control-label">Пароль</label>
                </div>
                <div class="col-sm-10">
                  <input type="password" class="form-control input-lg" id="inputPassword" name="inputPassword" placeholder="Password">
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
