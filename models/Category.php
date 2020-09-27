<?php

class Category {
    
    public static function getProductOfCategory($idcat,$page,&$kolrows)
    {
        $myDB = new SafeMySQL();
        
        $myselect = "SELECT SQL_CALC_FOUND_ROWS * FROM products WHERE category=$idcat ORDER BY name LIMIT ?i,?i";
        $startindex = ($page-1)*PER_PAGE;        
        $allarray = $myDB->getAll($myselect,$startindex,PER_PAGE);
        $kolrows = $myDB->getOne("SELECT FOUND_ROWS()");
        $resultarray = array();
        if ($kolrows!=0)
        {
        $indstr = Index::getListId($allarray,$resultarray);
        Index::getArrayFoto($indstr, 1, $resultarray);
        Index::getArraySize($indstr, $resultarray);
        Index::getArrayColor($indstr, $resultarray);
        }
        return $resultarray;
    }
}