<?php
/* Smarty version 3.1.30, created on 2017-03-11 10:35:33
  from "C:\OpenServer\domains\intermag\templates\404.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c3a8c5d604f4_55844020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f50f9a9b64b886b57758c6bdc9d6ae2d1e0fec3e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\intermag\\templates\\404.html',
      1 => 1486754084,
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
function content_58c3a8c5d604f4_55844020 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <?php $_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    
    <body> 

        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
        
        <div class="container">
            <div class="four">
                <h1>404</h1>

                <p>The page you're looking for could not be found.</p>

                <a href="index.html" class="more go">Go back</a>

            </div>
        </div>
        
       <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </body>
</html><?php }
}
