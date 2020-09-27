<?php

class Index
{
    public static function getListId(&$arr,&$resarr)
    {
        $indstr = "";
        foreach ($arr as $value)
        {
            $indstr = $indstr.$value['id'].",";
            $resarr[$value['id']] = $value;
        }
        
        $indstr = substr($indstr, 0,-1);
        
        return $indstr;
    }
    

    public static function getArrayFoto($indstr,$kolfoto,&$resarr)
    {
        $myDB = new SafeMySQL();
        
        $myselectfoto = "SELECT products, path FROM fotoproducts WHERE products IN ($indstr) ORDER BY products,id";
        $allarrayfoto = $myDB->getAll($myselectfoto);
        
        foreach ($allarrayfoto as $value)
        {            
            if ($resarr[$value['products']]['foto']==NULL) $resarr[$value['products']]['foto'] = array();;
            if (count($resarr[$value['products']]['foto'])<$kolfoto)
            {
                $resarr[$value['products']]['foto'][] = $value['path'];
            }
        }
        
        foreach ($resarr as $i=>$value)
        {
            $realfoto = count($resarr[$i]['foto']);
            if ($realfoto==0)
            {
                //сюда добавить массив из $kolfoto пустых фото заглушек
            }
            elseif ($realfoto<$kolfoto) 
            {
                for($k=$realfoto;$k<$kolfoto;$k++)
                 $resarr[$i]['foto'][]=$resarr[$i]['foto'][0];
            }
        }      
    }
    
    public static function getArraySize($indstr,&$resarr)
    {        
        $myDB = new SafeMySQL();        
  
        $myselectsize = "SELECT product,size,sizes.name as sizename FROM productsize LEFT JOIN sizes ON size=sizes.id WHERE product IN ($indstr) ORDER BY product";
        $allarraysize = $myDB->getAll($myselectsize);
        
        foreach ($allarraysize as $value)
        {            
            //if ($resarr[$value['products']]['sizes']==NULL) $resarr[$value['products']]['sizes'] = array();
            $resarr[$value['product']]['sizes'][] = $value['sizename'];            
        }
    }
    
    public static function getArrayColor($indstr,&$resarr)
    {       
        $myDB = new SafeMySQL();        
  
        $myselectcolor = "SELECT product,color,colors.name as colorname,colors.kod as colorkod FROM colorproducts LEFT JOIN colors ON color=colors.id WHERE product IN ($indstr) ORDER BY product,colorkod";
        $allarraycolor = $myDB->getAll($myselectcolor);
        
        foreach ($allarraycolor as $value)
        {            
            //if ($resarr[$value['products']]['sizes']==NULL) $resarr[$value['products']]['sizes'] = array();
            $resarr[$value['product']]['colors'][] = $value['colorkod'];            
        }
    }

    public static function getDiscountProducts()
    {
        $myDB = new SafeMySQL();
        
        $myselect = "SELECT id,fullname,price,discount FROM products WHERE discount!=0 ORDER BY name";
        
        $allarray = $myDB->getAll($myselect);
        $resultarray = array();        
      
        $indstr = self::getListId($allarray,$resultarray);
        self::getArrayFoto($indstr, 2, $resultarray);    
       
        return $resultarray;
    }
    
    public static function getNewArrivals() 
    {
        $myDB = new SafeMySQL();
        
        $myselect = "SELECT id,fullname,price FROM products WHERE isnew=1 ORDER BY name";
        
        $allarray = $myDB->getAll($myselect);
        $resultarray = array();        
        $indstr = self::getListId($allarray,$resultarray);
        self::getArrayFoto($indstr, 1, $resultarray);
        self::getArraySize($indstr, $resultarray);
        self::getArrayColor($indstr, $resultarray);
        
        return $resultarray;
    }
    
    public static function getBestProducts()
    {
        $myDB = new SafeMySQL();
        
        $myselect = "SELECT id,fullname,price,smalldiscription FROM products WHERE isbest=1 ORDER BY name LIMIT 0,3";
        
        $allarray = $myDB->getAll($myselect);
        $resultarray = array();        
        $indstr = self::getListId($allarray,$resultarray);
        self::getArrayFoto($indstr, 1, $resultarray);
        
        return $resultarray;
    }
    
    public static function getProductOfCategory($id,$maxkol)
    {
        $myDB = new SafeMySQL();
        
        $myselect = "SELECT id,name,fullname,price,smalldiscription FROM products WHERE category=$id LIMIT 0,$maxkol";
        
        $allarray = $myDB->getAll($myselect);
        $resultarray = array();        
        $indstr = self::getListId($allarray,$resultarray);
        self::getArrayFoto($indstr, 1, $resultarray);
        
        return $resultarray;
    }
    
    public static function getBrendsOfCategory($id)
    {
        $myDB = new SafeMySQL();
        
        $myselect = "SELECT DISTINCT brends.name FROM products LEFT JOIN brends ON brend=brends.id WHERE category=$id";
        
        $allarray = $myDB->getAll($myselect);  
        
        return $allarray;
    }
    
}



