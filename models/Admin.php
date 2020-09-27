<?php

class Admin {

    public static function getArraySection() {
        $myDB = new SafeMySQL();

        $myselect = "SELECT  * FROM sections";

        $allarray = $myDB->getAll($myselect);

        return $allarray;
    }

    public static function getArrayCategory() {
        $myDB = new SafeMySQL();

        $myselect = "SELECT  * FROM categories";

        $allarray = $myDB->getAll($myselect);

        return $allarray;
    }

    public static function getArrayCategoryForSection($id) {
        $myDB = new SafeMySQL();
        $myselect = "SELECT * FROM categories WHERE section=?i";
        $allarray = $myDB->getAll($myselect,$id);
        return $allarray;
    }
    
    public static function getArrayProductForCategory($id)
    {
        $myDB = new SafeMySQL();
        $myselect = "SELECT id,name,price,isnew,isbest FROM products WHERE category=?i";
        $allarray = $myDB->getAll($myselect,$id);
        return $allarray;   
    }
    
    public static function getProductForReduct($id)
    {
        /*
        //получим все цвета
        $myDB = new SafeMySQL();
        $myselect = "SELECT * FROM colors";
        $allcolor = $myDB->getAll($myselect);        
        //Получим все размеры
        $myDB = new SafeMySQL();
        $myselect = "SELECT * FROM sizes";
        $allsizes = $myDB->getAll($myselect);*/        
        //Получим все о товаре
        $myDB = new SafeMySQL();
        $myselect = "SELECT * FROM products WHERE id=?i";
        $product = $myDB->getRow($myselect,$id);        
        //получим все о цветах товара, нам нужны только id
        $myDB = new SafeMySQL();
        $myselect = "SELECT color FROM colorproducts WHERE product=?i";
        $productcolor = $myDB->getAll($myselect,$id);        
        //получим все о размерах товара, нам нужны только id
        $myDB = new SafeMySQL();
        $myselect = "SELECT size FROM productsize WHERE product=?i";
        $productsize = $myDB->getAll($myselect,$id);        
        //получим все о фотках товара
        $myDB = new SafeMySQL();
        $myselect = "SELECT * FROM fotoproducts WHERE products=?i";
        $foto = $myDB->getAll($myselect,$id);  
        /*
        //получим все бренды
        $myDB = new SafeMySQL();
        $myselect = "SELECT * FROM brends";
        $allbrends = $myDB->getAll($myselect);        
        //получим все секции
        $myDB = new SafeMySQL();
        $myselect = "SELECT * FROM sections";
        $allsections = $myDB->getAll($myselect);
        */
        return array(/*"allcolors" => $allcolor,
                     "allsizes" => $allsizes,
                     "allbrends" => $allbrends,
                     "allsections" => $allsections,*/
                     "product" => $product,
                     "colors" => $productcolor,
                     "sizes"=>$productsize,
                     "fotos"=>$foto);
    }

    public static function getInforForAllProduct()
    {
        //получим все цвета
        $myDB = new SafeMySQL();
        $myselect = "SELECT * FROM colors";
        $allcolor = $myDB->getAll($myselect);        
        //Получим все размеры
        $myDB = new SafeMySQL();
        $myselect = "SELECT * FROM sizes";
        $allsizes = $myDB->getAll($myselect);                
        //получим все бренды
        $myDB = new SafeMySQL();
        $myselect = "SELECT * FROM brends";
        $allbrends = $myDB->getAll($myselect);        
        //получим все секции
        $myDB = new SafeMySQL();
        $myselect = "SELECT * FROM sections";
        $allsections = $myDB->getAll($myselect);
        //получим все категории
        $myDB = new SafeMySQL();
        $myselect = "SELECT * FROM categories";
        $allcategories = $myDB->getAll($myselect);
        return array("allcolors" => $allcolor,
                     "allsizes" => $allsizes,
                     "allbrends" => $allbrends,
                     "allsections" => $allsections,
                     "allcategories" => $allcategories,
                     );
    }
    
    public static function delSection($id) {
        $myDB = new SafeMySQL();

        $myselect = "DELETE FROM sections WHERE id=$id";

        $result = $myDB->query($myselect);
        if (intval($result) == 1)
            return "Ok";
        else
            return "У секции есть катеогрии и/или бренды!";
    }

    public static function delCategory($id) {
        $myDB = new SafeMySQL();

        $myselect = "DELETE FROM categories WHERE id=$id";

        $result = $myDB->query($myselect);
        if (intval($result) == 1)
            return "Ok";
        else
            return "У секции есть товары!";
    }

    public static function addSection($name, $sort, $status) {
        $myDB = new SafeMySQL();
        $myselect = "INSERT INTO `sections`(`id`, `name`, `sort`, `status`) VALUES (null,?s,?i,?i)";
        $result = $myDB->query($myselect, $name, $sort, $status);
        $result = $myDB->insertId();
        return $result;
    }

    public static function addCategory($name, $sort, $status, $section) {
        $myDB = new SafeMySQL();
        $myselect = "INSERT INTO `sections`(`id`, `name`, `sort`, `status`, `section`) VALUES (null,?s,?i,?i,?i)";
        $result = $myDB->query($myselect, $name, $sort, $status, $section);
        $result = $myDB->insertId();
        return $result;
    }

    public static function redactSection($obj) {
        $myDB = new SafeMySQL();
        $myselect = "UPDATE `sections` SET `name` = ?s, `sort` = ?i, `status` = ?i WHERE `sections`.`id` = ?i";
        $myDB->query($myselect, $obj->name, $obj->sort, $obj->status, $obj->id);
        return "Ok";
    }

    public static function redactCategory($obj) {
        $myDB = new SafeMySQL();
        $myselect = "UPDATE `categories` SET `name` = ?s, `sort` = ?i, `status` = ?i, `section`=?i WHERE `categories`.`id` = ?i";
        $myDB->query($myselect, $obj->name, $obj->sort, $obj->status, $obj->section, $obj->id);
        return "Ok";
    }
    
    public static function insertNewProduct($obj)
    {
        $myDB = new SafeMySQL();
        $myselect = "INSERT INTO `products`(`id`, `name`, `fullname`, `brend`, `isnew`, `category`, "
                                 ."`issize`, `price`, `discount`, `iscolor`, `isbest`, `uniquecode`, "
                                 ."`smalldiscription`, `discription`, `status`) VALUES "
                                 ."(null,?s,?s,?i,?i,?i,?i,?s,?s,?i,?i,?s,?s,?s,?i)";
        $result = $myDB->query($myselect,$obj->name,$obj->fullname,$obj->brend,$obj->isnew,$obj->category,
                $obj->issize,$obj->price,$obj->discont,$obj->iscolor,$obj->best,
                "",$obj->discription,$obj->fulldiscription,$obj->status);
        $newId = $myDB->insertId();
        if ($result) return ["id"=>$newId,"result"=>"ok"];
        return ["result"=>"noOk"];
        
    }
    
    public static function reductProduct($obj)
    {
        $myDB = new SafeMySQL();
        $myselect = "UPDATE `products` SET `name`=?s,`fullname`=?s,`brend`=?i,`isnew`=?i,"
                . "`category`=?i,`issize`=?i,`price`=?s,`discount`=?s,`iscolor`=?i,`isbest`=?i,"
                . "`uniquecode`=?s,`smalldiscription`=?s,`discription`=?s,`status`=?i "
                . "WHERE `products`.`id` = ?i";
        $result = $myDB->query($myselect,$obj->name,$obj->fullname,$obj->brend,$obj->isnew,
                $obj->category,$obj->issize,$obj->price,$obj->discount,$obj->iscolor,
                $obj->isbest,"",$obj->discription,$obj->fulldiscription,$obj->status,$obj->id);
        if ($result) return ["result"=>"ok","comment"=>"Информация о товаре записана корректно"];
        return ["result"=>"noOk"];
    }
    
    public static function saveColorForProduct($idprod,$newcolors)
    {
        $myDB = new SafeMySQL();
        $myselect = "SELECT `color`  FROM `colorproducts` WHERE product=?i";
        $arraycolorinbase = $myDB->getAll($myselect,$idprod);
        $arraycolorinbase = array_column($arraycolorinbase, "color");
        //$arraycolorinbase = array_map(function($a){return intval($a);},$arraycolorinbase);
        $delcolor = array_diff($arraycolorinbase, $newcolors);
        $addcolor = array_diff($newcolors, $arraycolorinbase);
        
        if (count($delcolor)!==0)
        {
            $myselect = "DELETE FROM `colorproducts` WHERE color in (?a) and product=?i";
            $myDB->query($myselect,$delcolor,$idprod);
        }
        
        if (count($addcolor)!==0)
        {
            foreach ($addcolor as $value)
            {
                $myselect = "INSERT INTO `colorproducts`(`id`, `product`, `color`, `description`) VALUES (null,?i,?i,?s)";
                $myDB->query($myselect,$idprod,$value,"");
            }
        }        
        return ["result"=>"ok","idprod"=>$idprod,"delcolor"=>$delcolor,"addcolor"=>$addcolor];        
    }
    
    public static function savePictureForProduct()
    {
        $productdir = ROOT."\\views\\images\\products\\";
        
        $idprod = (int)$_POST["idprod"];
        $id     = (int)$_POST["idfoto"];
        $idcat  = (int)$_POST["idcat"];
        $isnew  = (int)$_POST["isnew"];
        $isdel  = intval($_POST["isdel"]);
        $myDB = new SafeMySQL();
        
        if ($isdel) 
        {
            //Получим название удаляемого файла
            $namefile = $myDB->getOne("SELECT `path` FROM `fotoproducts` WHERE id=?i ",$id);
            $fullpath = $productdir.$namefile;
            $result="Файл не нашли...";
            if (file_exists($fullpath))
            {
                if (unlink($fullpath)) $result="ok";
                if ($myDB->query("DELETE FROM `fotoproducts` WHERE id=?i",$id)) $result="ok";
            }
            
            //удаляем файл
            //$namefile = "какой то файл";
            return ["result"=>$result,"delfile"=>$fullpath];
        }
        
        if ($isnew)
        {
            //формируем путь для хранения товаров указанной категории
            $categorydir = sprintf("%07d",$idcat);
            //если каталога для хранения нет, создаем его
            $productdir = $productdir.$categorydir;
            if (!file_exists($productdir))  mkdir($productdir);
                        
            if (is_uploaded_file($_FILES["file"]["tmp_name"]))
            {
                //получаем исходное расширение файла
                $ext = end(explode(".", basename($_FILES["file"]["name"])));
                //нам нужен идентификационный номер для добавления фотографии к базе данных                
                $myDB->query("INSERT INTO `fotoproducts`(`id`, `products`, `colorproduct`, `path`) VALUES (null,?i,?i,?s)",$idprod,null,"");
                $idfile = $myDB->insertId();
                $filename = sprintf("%08d.%s",$idfile,$ext);
                
                $newpathfilename = $productdir."\\".$filename;
                $path = $categorydir."\\".$filename;
                if (move_uploaded_file($_FILES["file"]["tmp_name"],$newpathfilename))
                    $myDB->query("UPDATE `fotoproducts` SET `path`=?s WHERE `fotoproducts`.`id`=?i",$path,$idfile);
                
            }
            
            return ["result"=>"ok", "path"=>$path,"fullpath"=>$newpathfilename,
                "idfile"=>$idfile,"isnew"=>$isnew,"isdel"=>$isdel,"id"=>$idfile];
        }
        return ["result"=>"Что то пошло не так"];
    }
}
