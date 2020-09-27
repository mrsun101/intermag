<?php

class Single 
{
    private static function getArrayFoto($id,&$single)
    {
        $myDB = new SafeMySQL();
        
        $myselectfoto = "SELECT products, path FROM fotoproducts WHERE products=?i ORDER BY id";
        $allarrayfoto = $myDB->getAll($myselectfoto,$id);
        
        foreach ($allarrayfoto as $value)
        {   
            $single['foto'][] = $value['path'];
        }     
    }
    
    private static function getArraySize($id,&$single)
    {        
        $myDB = new SafeMySQL();        
  
        $myselectsize = "SELECT product,size,sizes.name as sizename FROM productsize LEFT JOIN sizes ON size=sizes.id WHERE product=$id ORDER BY product";
        $allarraysize = $myDB->getAll($myselectsize);
        
        foreach ($allarraysize as $value)
        {   
            $single['sizes'][] = $value['sizename'];            
        }
    }
    
    private static function getArrayColor($id,&$single)
    {       
        $myDB = new SafeMySQL();        
  
        $myselectcolor = "SELECT product,color,colors.name as colorname,colors.kod as colorkod FROM colorproducts LEFT JOIN colors ON color=colors.id WHERE product=$id ORDER BY product,colorkod";
        $allarraycolor = $myDB->getAll($myselectcolor);
        
        foreach ($allarraycolor as $value)
        {            
            $single['colors'][] = array('colorname' => $value['colorname'], 'colorkod'=>$value['colorkod']);            
        }
    }
    
    public static function getProduct($id)
    {
        $myDB = new SafeMySQL();
        
        $myselect = "SELECT * FROM products WHERE id=$id ORDER BY name LIMIT 0,3";        
        $single = $myDB->getRow($myselect);  
        
        self::getArrayFoto($id,$single);
        self::getArraySize($id, $single);
        self::getArrayColor($id, $single);
        $single['categoryproduct'] = Index::getProductOfCategory($single['category'], 3);
        $single['brends'] = Index::getBrendsOfCategory($single['category']);
        return $single;
    }
}
