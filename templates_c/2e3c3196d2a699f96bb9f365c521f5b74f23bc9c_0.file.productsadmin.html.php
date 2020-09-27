<?php
/* Smarty version 3.1.30, created on 2017-03-31 11:02:31
  from "C:\OpenServer\domains\intermag\templates\admin\productsadmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58de0d179eee54_66518446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e3c3196d2a699f96bb9f365c521f5b74f23bc9c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\intermag\\templates\\admin\\productsadmin.html',
      1 => 1490945144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58de0d179eee54_66518446 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php echo '<script'; ?>
 type="text/javascript" src="/views/js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/views/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <link href="/views/admin/css/style.css" rel="stylesheet" type="text/css">
        <link href="/views/admin/css/checkbox.css" rel='stylesheet' type="text/css">
        <link href="/views/admin/css/mycss.css" rel="stylesheet" type="text/css">
        <?php echo '<script'; ?>
 type="text/javascript" src="/views/js/datajs.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/views/js/jquery.filedrop.js"><?php echo '</script'; ?>
>         
        <?php echo '<script'; ?>
 type="text/javascript" src="/views/scripts/product.js"><?php echo '</script'; ?>
>
        <title>Редактирование товаров</title>
        
    </head>
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills">
                            <li>
                                <a href="">Дополнительные справочники</a>
                            </li>
                            <li>
                                <a href="/admin/section">Секции категорий</a>
                            </li>
                            <li>
                                <a href="#">Бренды</a>
                            </li>
                            <li>
                                <a href="#">Категории</a>
                            </li>
                            <li class="active">
                                <a href="/admin/product">Товары</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="buttonchange" style="display: none">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <a href="#" class="btn btn-primary">Открыть возможность выбора</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="sections">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Выберите секцию</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="nav nav-justified nav-pills" id="listsection">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="categoriesandproducts">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                        <div class="btn-link panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Выберите категорию</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group" id="listcategories">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12" id="products">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="btn-link panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                                                id
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-7 col-xs-7">
                                                Название товара
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                                                Цена
                                            </div>
                                            <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                                                Продажи
                                            </div>
                                            <div class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                                                Новый
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body"> 
                                        <div>
                                            <ul class="nav nav-stacked nav-pills" id="listproducts">                                               

                                            </ul>
                                        </div>

                                    </div> 
                                    <div class="panel-footer">
                                        <input id="addproduct" type="button" class="btn btn-block btn-primary" value="Добавить новый товар">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form class="form-horizontal" id="product" method="post" action="" style="display: none">

            <div class="container">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h3>Название товара</h3>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <!-- id, Наименование, кнопка сохранить -->
                            <div class="col-lg-2 col-md-2 col-sm-2">
                                <input id="idredaact" type="text" class="form-control" placeholder="id" disabled="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input id="nameredact" type="text" class="form-control" placeholder="Название товара">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <a id="saveproduct" class="btn btn-block btn-success">Записать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="panel panel-primary">                    
                    <div class="panel-body">
                        <div class="col-lg-12 col-md-12 col-sm-12">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#mains" data-toggle="tab">Основные параметры</a>
                                    <!-- Полное наименование, Категория, Бренд -->
                                </li>
                                <li>
                                    <a href="#sales" data-toggle="tab">Параметры продажи</a>
                                    <!-- Цена, Скидка, Лучшие продажи -->
                                </li>
                                <li>
                                    <a href="#discription" data-toggle="tab">Описания</a>
                                    <!-- Краткое описание, полное описание, штрих код-->
                                </li>
                                <li>
                                    <a href="#colorandsizes" data-toggle="tab">Цвета и Размеры</a>
                                    <!-- Есть цвет, Есть размер, Цвета, Размеры, -->
                                </li>
                                <li>
                                    <a href="#fotos" data-toggle="tab">Фотографии</a>
                                    <!-- Есть цвет, Есть размер, Цвета, Размеры, -->
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="mains">
                                    <br>

                                    <div class="alert alert-info alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>Обратите внимание: </strong>Для изменения парметров необходимо нажать на кнопку записать! 
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                            <label>Товар продается</label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                            <div class="material-switch pull-right">
                                                <input id="statusredact" type="checkbox">
                                                <label for="statusredact" class="label-info"></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                            <label>Полное наименование</label>                                            
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">                                            
                                            <input id="fullnameredact" type="text" class="form-control" placeholder="Полное наименование">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <label>Секция:</label>                                                
                                                <select id="productsection" class="form-control">

                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">

                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <label>Категория:</label>
                                                <select id="productcategory" class="form-control">

                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <label>Бренд:</label>
                                                <select id="productbrends" class="form-control">

                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="sales">
                                    <br>

                                    <div class="alert alert-info alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>Обратите внимание: </strong>Для изменения парметров необходимо нажать на кнопку записать! 
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                            <label>Цена</label>
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                            <input id="priceredact" type="text" class="form-control" placeholder="Цена">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                            <label>Скидка</label>
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                            <input id="discontredact" type="text" class="form-control" placeholder="Скидка">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                            <label>Лучшие продажи</label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                            <div class="material-switch pull-right">
                                                <input id="bestsalesredact" type="checkbox">
                                                <label for="bestsalesredact" class="label-success"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                            <label>Новый товар</label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                            <div class="material-switch pull-right">
                                                <input id="newsalesredact" type="checkbox">
                                                <label for="newsalesredact" class="label-success"></label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane" id="discription">
                                    <br>
                                    <div class="alert alert-info alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>Обратите внимание: </strong>Для изменения парметров необходимо нажать на кнопку записать! 
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                            <div class="panel panel-warning">
                                                <div class="panel-heading">
                                                    <div class="panel-title">
                                                        <h5>Краткое описание</h5>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <textarea id="discriptionredact" class="form-control" rows="7">Краткое описание товара.Краткое описание товара.Краткое описание товара.
                    Краткое описание товара.Краткое описание товара.Краткое описание товара.</textarea>
                                                    </div> 
                                                </div>                                            
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md- col-sm-12 col-xs-12">
                                            <div class="panel panel-warning">
                                                <div class="panel-heading">
                                                    <div class="panel-title">
                                                        <h5>Полное описание</h5>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <textarea id="fulldiscriptionredact" class="form-control" rows="7">Полное описание товара.Полное описание товара.Полное описание товара.Полное
                    описание товара.Полное описание товара.Полное описание товара.Полное описание
                    товара.Полное описание товара.Полное описание товара.Полное описание товара.Полное
                    описание товара.Полное описание товара.Полное описание товара. Полное описание
                    товара. Полное описание товара. Полное описание товара.Полное описание
                    товара.</textarea>
                                                    </div> 
                                                </div>                                            
                                            </div>
                                        </div>
                                    </div>                                    

                                </div>
                                <div class="tab-pane" id="colorandsizes">
                                    <br>

                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>Внимание!</strong>Цвета и размеры добавляются и удаляются к товару сразу, как добавлены в таблицах. 
                                        Даже без сохранения самого товара!
                                    </div>                                  
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-5">

                                            <div class="row">
                                                <div class="col-lg-8 col-md-12 col-sm-12">
                                                    <label>У товара есть цвета</label>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                    <div class="material-switch pull-right">
                                                        <input id="iscolorsredact" type="checkbox">
                                                        <label for="iscolorsredact" class="label-success"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" id="entercolors">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                        <div class="panel-title">
                                                            <h5>Цвета товара</h5>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body" id="colorsredact">

                                                    </div>
                                                    <div class="panel-footer">
                                                        <div class="row addcolor">
                                                            <div class="col-lg-10 col-md-10 col-sm-12">                                                                
                                                                <select class="form-control" id="listcolors">

                                                                </select>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-12">                                                                
                                                                <a class="btn btn-block btn-success">V</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                        </div>                                        
                                        <div class="col-lg-5 col-md-5 col-sm-5">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-12 col-sm-12">
                                                    <label>У товара есть размеры</label>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-sm-12">
                                                    <div class="material-switch pull-right">
                                                        <input id="issizes" type="checkbox">
                                                        <label for="issizes" class="label-success"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading">
                                                        <div class="panel-title">
                                                            <h5>Размеры товаров</h5>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-lg-1 col-md-1 col-sm-12">
                                                                <input type="text" class="form-control" placeholder="id" disabled="">
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-12">
                                                                <input type="text" class="form-control" placeholder="Название размера">
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-12">
                                                                <a class="btn btn-block btn-danger">X</a>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="panel-footer">
                                                        <div class="row">
                                                            <div class="col-lg-10 col-md-10 col-sm-12">                                                            
                                                                <select class="form-control">
                                                                    <option value="1">Размер №1</option>
                                                                    <option value="2">Размер №2</option>
                                                                    <option value="3" selected="">Размер №3</option>
                                                                    <option value="4">Размер №4</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-2 col-md-2 col-sm-12">                                                           
                                                                <a class="btn btn-block btn-success">V</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="tab-pane" id="fotos" ondrop="return dodrop(event);" ondragleave="dropleave();" ondragenter="dropenter(event);" ondragover="dropenter(event);">-->
                                <div class="tab-pane" id="fotos">
                                    <br>
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                <h5>Фотографии</h5>
                                            </div>
                                        </div>
                                        <div class="panel-body" id="fotoimg">
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <strong>Внимание!</strong>Фотографии удаляются с сервера сразу после нажатия на кнопку удалить (X)
                                            </div>
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <strong>Обратите внимание: </strong>Для добавления фотографии товара достаточно перенести ее на свободное поле! 
                                            </div>

                                        </div>
                                        <div class="panel-footer">
                                            <h5 >Перенесите фотографии сюда</h5>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body></html><?php }
}
