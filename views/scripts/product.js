
var TekSection = 0;
var TekCategory = 0;
var TekProduct = 0;
var TekProductObj = 0;
function getHTMLsection(Obj)
{
    return $('<li id="section' + Obj.id + '" data-id="' + Obj.id + '">' +
            '<a href="">' + Obj.name + '</a>' +
            '</li>'
            );
}
function getHTMLcategory(Obj)
{
    return $('<a href="#" class="list-group-item id="category' + Obj.id + '" data-id="' + Obj.id + '">' + Obj.name + '</a>');
}

function getHTMLproduct(Obj)
{
    isbest = Obj.best === 1 ? "checked" : "";
    isnew = Obj.isnew === 1 ? "checked" : "";
    //console.log(isbest);
    return $('<li role="presentation" data-id="' + Obj.id + '">' +
            '<a href="">' +
            '<div class="row">' +
            '<div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">' + Obj.id +
            '</div>' +
            '<div class="col-lg-5 col-md-5 col-sm-7 col-xs-7">' + Obj.name +
            '</div>' +
            '<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">' + Obj.price +
            '</div>' +
            '<div class="col-lg-2 col-md-2 hidden-sm hidden-xs">' +
            '<div class="material-switch pull-right">' +
            '<input id="sale' + Obj.id + '" type="checkbox" ' + isbest + '>' +
            '<label for="sale' + Obj.id + '" class="label-success"></label>' +
            '</div>' +
            '</div>' +
            '<div class="col-lg-2 col-md-2 hidden-sm hidden-xs">' +
            '<div class="material-switch pull-right">' +
            '<input id="new' + Obj.id + '" type="checkbox" ' + isnew + '>' +
            '<label for="new' + Obj.id + '" class="label-success"></label>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</a>' +
            '</li>'
            );
}

function getHTMLimg(Obj)
{
    return $('<div class="col-md-3" data-id="' + Obj.id + '">' +
            '<a><img src="" class=" img-responsive" alt=""></a>' +
            '<a class="btn btn-block btn-danger">X</a>' +
            '</div>'
            );
}

function getHTMLcolor(Obj)
{
    return $('<div class="row" data-id="' + Obj.id + '">' +
            '<div class="col-lg-1 col-md-1 col-sm-12">' +
            '<input value="' + Obj.id + '" type="text" class="form-control" placeholder="id" disabled="">' +
            '</div>' +
            '<div class="col-lg-7 col-md-7 col-sm-12">' +
            '<input value="' + Obj.name + '" type="text" class="form-control" placeholder="Название цвета" disabled="">' +
            '</div>' +
            '<div class="col-lg-2 col-md-2 col-sm-12">' +
            '<span class="mycolor" style="background: #' + Obj.code + '"></span>' +
            '</div>' +
            '<div class="col-lg-2 col-md-2 col-sm-12">' +
            '<a class="btn btn-block btn-danger mydelete">X</a>' +
            '</div>' +
            '</div>'
            );
}




function validateFile(file)
{
    maxFileSize = 5 * 1024 * 1024;
    if (!file.type.match(/image\/(jpeg|jpg|png|gif)/)) {

        return false;
    }

    if (file.size > maxFileSize) {
        return false;
    }
    return true;
}
;
function viewImgFoto()
{
    $("#fotoimg").empty();
    fotos = TekProductObj.foto;
    for (var index in fotos)
    {
        if (fotos[index].isdel)  continue;
        tekFoto = fotos[index];
        img = getHTMLimg(tekFoto);
        img.find("img").attr("src", tekFoto.src);
        $("#fotoimg").append(img);
    }
}

function dropenter()
{
    event.stopPropagation();
    event.preventDefault();
    $("#fotos").children().css("background", "#ffa");
}
function dropleave()
{
    // Привести "зону выгрузки" в первоначальный вид
    event.stopPropagation();
    event.preventDefault();
    $("#fotos").children().css("background", "#fff");
}

function dodrop()
{
    event.stopPropagation();
    event.preventDefault();
    var dt = event.dataTransfer;
    if (!dt && !dt.files) {
        return false;
    }
    // Получить список загружаемых файлов
    var files = dt.files;
    // Fix для Internet Explorer
    dt.dropEffect = "copy";
    for (var i = 0; i < files.length; i++)
    {
        if (validateFile(files[i]))
        {
            console.log(files[i]);
            var reader = new FileReader();
            reader.onload = function (event) {
                var dataUri = event.target.result;
                //tekid = maxId(TekProductObj.foto);
                //tekid++;
                console.log(this);
                foto = new Foto(0, dataUri, this.myfile, 1, 0);
                //console.log(foto);
                TekProductObj.foto.push(foto);
                viewImgFoto();
            };
            reader.myfile = files[i];
            reader.readAsDataURL(files[i]);
        }
    }
    return false;
}

function ViewTekProductForRedact()
{
    $("#idredaact").val(TekProductObj.id);
    $("#nameredact").val(TekProductObj.name);
    $("#product").find("h3").html(TekProductObj.name);
    $("#fullnameredact").val(TekProductObj.fullname);
    $("#priceredact").val(TekProductObj.price);
    $("#discontredact").val(TekProductObj.discont);
    $("#discriptionredact").val(TekProductObj.discription);
    $("#fulldiscriptionredact").val(TekProductObj.fulldiscription);
    //добавляем секции 

    for (var index in datasection)
    {
        selected = TekSection === datasection[index].id ? " selected " : "";
        $("#productsection").append($('<option value="' + datasection[index].id + '" ' + selected + '>' + datasection[index].name + '</option>'));
    }
    //добавляем категории
    for (var index in datacategory)
    {
        if (datacategory[index].section === TekSection)
        {
            selected = TekCategory === datacategory[index].id ? " selected " : "";
            $("#productcategory").append($('<option value="' + datacategory[index].id + '" ' + selected + '>' + datacategory[index].name + '</option>'));
        }
    }
    //добавляем бренды
    for (var index in databrends)
    {
        if (databrends[index].section === TekSection)
        {
            selected = TekProductObj.brend === databrends[index].id ? " selected " : "";
            $("#productbrends").append($('<option value="' + databrends[index].id + '" ' + selected + '>' + databrends[index].name + '</option>'));
        }
    }

    if (TekProductObj.best === 1)
        $("#bestsalesredact").attr("checked", "checked");
    if (TekProductObj.isnew === 1)
        $("#newsalesredact").attr("checked", "checked");
    if (TekProductObj.status === 1)
        $("#statusredact").attr("checked", "checked");
    if (TekProductObj.iscolor === 1)
    {
        $("#iscolorsredact").attr("checked", "checked");
        $("#colorsredact").empty();
        //console.log(TekProductObj);
        arrcolor = TekProductObj.colors;
        for (var index in arrcolor)
        {
            color = getColorById(arrcolor[index]);
            $("#colorsredact").append(getHTMLcolor(color));
        }
        $("#entercolors").fadeIn();
    } else
    {
        $("#entercolors").fadeOut(0);
        $("#iscolorsredact").removeAttr("checked");
    }
    $("#listcolors").empty();
    for (var index in datacolor)
    {
        $("#listcolors").append($('<option value="' + datacolor[index].id + '" style="background: #' + datacolor[index].code + '">' + datacolor[index].name + '</option>'));
    }

    viewImgFoto();
    $("#buttonchange").fadeIn(0);
    $("#sections").fadeOut(0);
    $("#categoriesandproducts").fadeOut(0);
    $("#product").fadeIn(0);
}

function SendFotoToServer(foto)
{
    idprod = TekProductObj.id;
    var MyData = new FormData();
    MyData.append('idprod', idprod);
    MyData.append('idfoto', foto.id);
    MyData.append('idcat',TekProductObj.category);
    MyData.append('isnew', foto.isnew);
    MyData.append('isdel', foto.isdel);

    if (foto.isnew === 1 || foto.isnew)
        MyData.append("file", foto.file,foto.file.name);
    
    $.ajax({
        url: "/admin/productcomand/savefoto",
        data: MyData,
        context: foto,
        type: 'POST',
        processData: false,
        contentType: false,
        success: function (data) {
            
            data = JSON.parse(data);
            console.log(data);
            if (data.result === "ok")
            {                
                if (this.isnew === 1)
                {
                    this.isnew = 0;
                    this.id    = data.id;
                    this.src   = data.path;
                    this.file  = "";
                }    
                if (this.isdel === 1)
                {
                    this.isdel = 0;
                    this.id    = 0;
                    this.src   = "";
                    this.file  = "";
                }
            }            
        }
    });
}

$(document).ready(function () {

    
    $.post("/admin/getallforproducts", {}, function (data) {
        
        dataarray = JSON.parse(data);        

        datasection = dataarray.allsections.map(function (obj) {
            return new Section(parseInt(obj.id), obj.name, parseInt(obj.sort), parseInt(obj.status));
        });

        datacategory = dataarray.allcategories.map(function (obj) {
            return new Category(parseInt(obj.id), obj.name, parseInt(obj.section), parseInt(obj.sort), parseInt(obj.status));
        });

        datacolor = dataarray.allcolors.map(function (obj) {
            return new Color(parseInt(obj.id), obj.name,
                    parseInt(obj.red), parseInt(obj.green),
                    parseInt(obj.blue), obj.kod);
        });
        datasize = dataarray.allsizes.map(function (obj) {
            return new Size(parseInt(obj.id), obj.name);
        });
        databrends = dataarray.allbrends.map(function (obj) {
            return new Brend(parseInt(obj.id), obj.name, parseInt(obj.section),
                    parseInt(obj.sort), parseInt(obj.status));
        });
        for (var index in datasection)
        {
            $("#listsection").append(getHTMLsection(datasection[index]));
        }
    });

    $("#listsection").click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        idsection = parseInt($(e.target).parent().attr("data-id"));
        TekSection = idsection;
        TekCategory = 0;
        $(this).find("li").removeClass("active");
        $(e.target).parent().addClass("active");
        
        $("#listcategories").find("a").remove();
        $("#listproducts").find("li").remove();
        for (var index in datacategory)
            if (datacategory[index].section === TekSection)
                $("#listcategories").append(getHTMLcategory(datacategory[index]));


        return false;
    });
    $("#listcategories").click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        idcategory = parseInt($(e.target).attr("data-id"));
        if (TekCategory === idcategory)
            return false;
        TekCategory = idcategory;
        $("#listcategories").find("a").removeClass("active");
        $(e.target).addClass("active");
        $.post("/admin/categorycomand/getproductforcategory", {"id": idcategory}, function (data) {

            dataproducts = JSON.parse(data).map(function (obj) {
                return new Prodact(parseInt(obj.id), 1, obj.name, "", "", "",
                        parseFloat(obj.price), 0, parseInt(obj.isbest),
                        "", "", "", "", parseInt(obj.isnew), "", "", "");
            });
            
            $("#listproducts").find("li").remove();
            for (var index in dataproducts)
            {
                $("#listproducts").append(getHTMLproduct(dataproducts[index]));
            }
        });
        return false;
    });
    $("#buttonchange").click(function () {
        $("#buttonchange").fadeOut(0);
        $("#product").fadeOut(0);
        $("#sections").fadeIn(0);
        $("#categoriesandproducts").fadeIn(0);
    });
    $("#productsection").change(function () {

        TekSection = parseInt($("#productsection option:selected").val());
        $("#productcategory").empty();
        $("#productbrends").empty();
        //добавляем категории
        for (var index in datacategory)
        {
            if (datacategory[index].section === TekSection)
            {
                selected = TekCategory === datacategory[index].id ? " selected " : "";
                $("#productcategory").append($('<option value="' + datacategory[index].id + '" ' + selected + '>' + datacategory[index].name + '</option>'));
            }
        }
        //добавляем бренды
        for (var index in databrends)
        {
            if (databrends[index].section === TekSection)
            {
                selected = TekProductObj.brend === databrends[index].id ? " selected " : "";
                $("#productbrends").append($('<option value="' + databrends[index].id + '" ' + selected + '>' + databrends[index].name + '</option>'));
            }
        }

    });
    $("#entercolors").click(function (e) {

        if ($(e.target).hasClass("mydelete"))
        {
            idcolor = parseInt($(e.target).parents(".row").first().attr("data-id"));
            for (var index in TekProductObj.colors)
            {
                if (idcolor === getColorById(TekProductObj.colors[index]).id)
                {
                    TekProductObj.colors.splice(index, 1);
                }
            }
            $(e.target).parents(".row").first().remove();
        } else if ($(e.target).parents(".row").first().hasClass("addcolor"))
        {
            if ($(e.target).is("a"))
            {
                newcolor = parseInt($("#listcolors").val());
                if (TekProductObj.colors.indexOf(newcolor) === -1)
                {
                    TekProductObj.colors.push(newcolor);
                    color = getColorById(newcolor);
                    $("#colorsredact").append(getHTMLcolor(color));
                }
            }
        }

        return false;
    });

    $("#addproduct").click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        TekProductObj = new Prodact(0, 0, "", "", TekCategory, 0, 0, 0,
                0, "", "", 0, 0, 1, [], [], []);
        console.log(TekProductObj);
        ViewTekProductForRedact();
        return false;
    });

    $("#listproducts").click(function (e) {

        if ($(e.target).is("label") || ($(e.target).is("input")))
        {
            return true;
        }
        e.preventDefault();
        e.stopPropagation();
        idproduct = $(e.target).parents("li").first().attr("data-id");
        if (idproduct === undefined)
            return false;
        idproduct = parseInt(idproduct);
        TekProduct = idproduct;
        $.post("/admin/productcomand/getproductinfo", {"id": idproduct}, function (data) {

            dataarray = JSON.parse(data);
            
            var fotos = dataarray.fotos.map(function (obj) {
                return new Foto(parseInt(obj.id), "/views/images/products/" + obj.path, "", 0, 0);
            });
            var colors = dataarray.colors.map(function (obj) {
                return parseInt(obj.color);
            });
            var sizes = dataarray.sizes.map(function (obj) {
                return parseInt(obj.size);
            });
            var Obj = dataarray.product;
            TekProductObj = new Prodact(parseInt(Obj.id), parseInt(Obj.status), Obj.name, Obj.fullname,
                    parseInt(Obj.category), parseInt(Obj.brend), Obj.price, Obj.discont,
                    parseInt(Obj.isbest), Obj.discription, Obj.fulldiscription,
                    parseInt(Obj.iscolor), parseInt(Obj.issize), parseInt(Obj.isnew),
                    colors, sizes, fotos);
            ViewTekProductForRedact();
            
        });
        return false;
    });
    $("#iscolorsredact").click(function (e)
    {
        //читаем значение флажка 
        if ($("#iscolorsredact").prop("checked"))
        {
            TekProductObj.iscolor = 1;
            $("#colorsredact").empty();
            //console.log(TekProductObj);
            arrcolor = TekProductObj.colors;
            for (var index in arrcolor)
            {
                color = getColorById(arrcolor[index]);
                $("#colorsredact").append(getHTMLcolor(color));
            }
            $("#entercolors").fadeIn();
        } else
        {
            TekProductObj.iscolor = 0;
            $("#entercolors").fadeOut();
        }
    });
    $("#fotos").click(function (e) {
        idfoto = parseInt($(e.target).parent().attr("data-id"));
        arrayfoto = TekProductObj.foto;
        for (var index in arrayfoto)
        {
            if (idfoto === arrayfoto[index].id)
            {
                //arrayfoto.splice(index, 1);
                arrayfoto[index].isdel = 1;
                arrayfoto[index].src = "";
            }
        }

        viewImgFoto();
        return false;
    });
    $("#fotos").bind("drop", dodrop)
            .bind("dragleave", dropleave)
            .bind("dragenter", dropenter)
            .bind("dragover", dropenter);

    $("#saveproduct").click(function () {
        //if (TekProductObj !== 0) TekProductObj.id = $("#idredaact").val();
        TekProductObj.id = parseInt(TekProductObj.id);
        TekProductObj.name = $("#nameredact").val();
        TekProductObj.fullname = $("#fullnameredact").val();
        if ($("#statusredact").prop("checked"))
            TekProductObj.status = 1;
        else
            TekProductObj.status = 0;
        TekProductObj.category = parseInt($("#productcategory").val());
        TekProductObj.brend = parseInt($("#productbrends").val());
        TekProductObj.price = $("#priceredact").val();
        TekProductObj.discont = $("#discontredact").val();
        if ($("#bestsalesredact").prop("checked"))
            TekProductObj.best = 1;
        else
            TekProductObj.best = 0;
        TekProductObj.discription = $("#discontredact").val();
        TekProductObj.fulldiscription = $("#fulldiscriptionredact").val();
        //Остальные параметры обновляются автоматически (при редактировании)

        //теперь можем выгружать, создадим объект без вложенных массивов,
        //Фото будем отпраавлять отдельно
        var BaseData = BaseDataPtoduct(TekProductObj);

        $.ajax({
            url: "/admin/productcomand/saveorredact",
            type: 'POST',
            data: {obj: JSON.stringify(BaseData)},
            async: false,
            dataType: 'json',
            success: function (data) {
                //if (data.result !=="ok") тут нужно что-то делать, например сказать что не получилось сохранить
                console.log(data);
                if (data.result === "ok" && TekProductObj.id === 0)
                    TekProductObj.id = data.id;
                
                colors = TekProductObj.colors;
                $.ajax({
                    url: "/admin/productcomand/savecolorproduct",
                    type: 'POST',
                    data: {id: TekProductObj.id, colors: JSON.stringify(colors)},
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                    }
                });                
                //console.log(TekProductObj);
                fotos = TekProductObj.foto;

                for (var index in fotos)
                {
                    console.log(fotos[index]);
                    if (fotos[index].isnew||fotos[index].isdel) 
                        SendFotoToServer(fotos[index]);
                }
            }
        });
    });
});


