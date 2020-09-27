<?php
/* Smarty version 3.1.30, created on 2017-03-29 18:25:06
  from "C:\OpenServer\domains\intermag\templates\admin\sectionadmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dbd1d220a8f2_49785829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebd78e9d87870de99d65adab24b09bfc443836bf' => 
    array (
      0 => 'C:\\OpenServer\\domains\\intermag\\templates\\admin\\sectionadmin.html',
      1 => 1490800964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dbd1d220a8f2_49785829 (Smarty_Internal_Template $_smarty_tpl) {
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
        <link href="/views/admin/css/checkbox.css" rel='stylesheet' type="text/css">
        <?php echo '<script'; ?>
 type="text/javascript" src="/views/js/datajs.js"><?php echo '</script'; ?>
>
        <title>Редактирвоание секций</title>  
        <?php echo '<script'; ?>
>

            function getSection(obj)
            {
                status = obj.status === 1 ? "checked" : "";
                return $('<div class="container" data-id="' + obj.id + '">' +
                        '<div class="row">' +
                        '<div class="col-md-12">' +
                        '<form class="form-horizontal" role="form">' +
                        '<div class="form-group">' +
                        '<div class="col-sm-2">' +
                        '<input type="text" class="form-control" placeholder="id" disabled="" value="' + obj.id + '">' +
                        '</div>' +
                        '<div class="col-sm-6">' +
                        '<input type="text" id="name'+obj.id+'" class="form-control" placeholder="Название секции" value="' + obj.name + '">' +
                        '</div>' +
                        '<div class="col-sm-1">' +
                        '<input type="text" id="sort'+obj.id+'" class="form-control" placeholder="Сортировка" value="' + obj.sort + '">' +
                        '</div>' +
                        '<div class="col-sm-1">' +
                        '<div class="material-switch">' +
                        '<input id="status' + obj.id + '" name="someSwitchOption001" type="checkbox" ' + status + '>' +
                        '<label for="status' + obj.id + '" class="label-success"></label>' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-sm-1">' +
                        '<a class="btn btn-block btn-success myredact">V</a>' +
                        '</div>' +
                        '<div class="col-sm-1">' +
                        '<a class="btn btn-block btn-danger mydelete">X</a>' +
                        '</div>' +
                        '</div></form></div></div></div>'
                        );
            }

            $(document).ready(function () {
                $("#addsection").click(function () {
                    obj = new Section(0,
                            $("#sectionnewname").val(),
                            parseInt($("#sectionnewsort").val()),
                            $("#sectionnewstatus").is(":checked")
                            );
                    $.post("/admin/sectioncomand/addsection", {"obj": JSON.stringify(obj)}, function (data) {
                        result = JSON.parse(data);
                        if (result.result === "Ok")
                        {
                            newId = result.id;
                            obj = new Section(newId,
                                    $("#sectionnewname").val(),
                                    $("#sectionnewsort").val(),
                                    $("#sectionnewstatus").is(":checked")
                                    );
                            datasection.push(obj);
                            $("#listsection").append(getSection(obj));
                        }
                    });
                });
                $("#listsection").click(function (e) {
                    if ($(e.target).hasClass("mydelete"))
                    {
                        delcontainer = $(e.target).parents("div.container");
                        id = parseInt(delcontainer.attr("data-id"));
                        $.post("/admin/sectioncomand/delsection",
                                {"id": JSON.stringify(id)}, function (data) {
                            //console.log(data);
                            if (data === "Ok")
                            {
                                for (index in datasection)
                                {
                                    if (datasection[index].id === id)
                                    {
                                        delete datasection[index];
                                    }
                                }
                                delcontainer.fadeOut("slow", function () {
                                    this.remove();
                                });
                            }
                            ;
                        });
                    } else if ($(e.target).hasClass("myredact"))
                    {
                        redactcontainer = $(e.target).parents("div.container");                        
                        id = parseInt(redactcontainer.attr("data-id"));
                        obj = new Section(id,$("#name"+id).val(),parseInt($("#sort"+id).val()),$("#status"+id).is(":checked"));
                        $.post("/admin/sectioncomand/redact",{"obj": JSON.stringify(obj)},function (data){
                            //console.log(data);
                        });                   
                    };
                });

                $.post("/admin/sectioncomand/getsections", {}, function (data) {
                    //console.log(data);
                    datasection = JSON.parse(data);                   
                    
                    for (index in datasection)
                    {
                        obj = datasection[index];
                        obj.status = parseInt(obj.status);
                        $("#listsection").append(getSection(obj));
                    }
                });
            });
        <?php echo '</script'; ?>
>
    </head>
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills">
                            <li>
                                <a href="/admin/section">Дополнительные справочники</a>
                            </li>
                            <li class="active">
                                <a href="#">Секции категорий</a>
                            </li>
                            <li>
                                <a href="#">Бренды</a>
                            </li>
                            <li>
                                <a href="#">Категории</a>
                            </li>
                            <li>
                                <a href="/admin/product">Товары</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="listsection">

        </div>   
        <hr>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" placeholder="id" disabled="">
                                </div>
                                <div class="col-sm-6">
                                    <input id="sectionnewname" type="text" class="form-control" placeholder="Название секции">
                                </div>
                                <div class="col-sm-1">
                                    <input id="sectionnewsort" type="text" class="form-control" placeholder="Сортировка" value="0">
                                </div>
                                <div class="col-sm-1">
                                    <div class="material-switch pull-right">
                                        <input id="sectionnewstatus" name="someSwitchOption001" type="checkbox"/>
                                        <label for="sectionnewstatus" class="label-success"></label>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <a class="btn btn-block btn-success" id="addsection">V</a>
                                </div>
                                <div class="col-sm-1">

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </body></html><?php }
}
