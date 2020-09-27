<?php


class CategoryController 
{
    public function actionProducts($id,$page)
    {
        $kolrows = 0;
        $arrayofcategory = Category::getProductOfCategory($id, $page,$kolrows);
        $arrayresult = array();
        $i = 0;
        $j = 0;
        foreach ($arrayofcategory as $key =>$value)
        {
            $arrayresult[$i][$j++] = $value;
            if ($j==4) 
            {
                $i++;$j=0;
            }
        }
        //var_dump($arrayresult);
        //die();
        ViewIndex::category($id,$arrayresult,$page,$kolrows);
    }
}
