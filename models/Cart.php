<?php

class Cart {
    
    public static function clear()
    {
        if (isset($_SESSION['products']))
        {
            unset($_SESSION['products']);
        }
    }

    public static function addProduct($id)
    {
        $id = intval($id);
        
        $productInCart = array();
        
        if (isset($_SESSION['products']))
        {
            $productInCart = $_SESSION['products'];
        }
        
        if (array_key_exists($id, $productInCart))
        {
            $productInCart[$id]++;
        } else {
            $productInCart[$id] = 1;                    
        }
        
        $_SESSION['products'] = $productInCart;
    }
    
    public static function subProduct($id)
    {
        $id = intval($id);
        
        $productInCart = array();
        
        if (isset($_SESSION['products']))
        {
            $productInCart = $_SESSION['products'];
        }
        
        if (array_key_exists($id, $productInCart))
        {
            $productInCart[$id]--;
        } 
        
        $_SESSION['products'] = $productInCart;
    }

    public static function countItems()
    {
        $count = 0;
        if (isset($_SESSION['products']))
        {
           foreach ($_SESSION['products'] as $id => $quantity)
            {
                $count += $quantity;
            }            
        }
        return $count;
    }
    
    public static function sumItems()
    {
        $sum = 0;
        if (isset($_SESSION['products']))
        {
            $strId = "";            
            foreach ($_SESSION['products'] as $id => $quantity)
            {
                $strId = $strId.$id.",";
            }
            $strId = substr($strId, 0,-1);   
            
            $myDB = new SafeMySQL();           
            $myselect = "SELECT id, price FROM `products` WHERE id IN ($strId) ORDER BY id";
            $allarray = $myDB->getAll($myselect);
            
            foreach ($allarray as $value)
            {
                $sum += $value['price']*$_SESSION['products'][$value['id']];
            }
        }
        return $sum;
    }
    
    public static function getProductOfCart()
    {
        $myDB = new SafeMySQL();
        
        if (isset($_SESSION['products']))
        {
            $strId = "";            
            foreach ($_SESSION['products'] as $id => $quantity)
            {
                $strId = $strId.$id.",";
            }
            $strId = substr($strId, 0,-1);
        }
        else 
        {
            return array();
        }
        
        $myselect = "SELECT * FROM products WHERE id IN ($strId) ORDER BY id";        
        $allarray = $myDB->getAll($myselect);        
        $resultarray = array();
        
        $indstr = Index::getListId($allarray,$resultarray);
        Index::getArrayFoto($indstr, 1, $resultarray);
        Index::getArraySize($indstr, $resultarray);
        Index::getArrayColor($indstr, $resultarray);
        
        $cartarray = array();
        foreach ($_SESSION['products'] as $id => $quantity)
        {
            for($i=0;$i<$quantity;$i++)
            {
                $cartarray[] = array("id"=>$id,"infor"=>$resultarray[$id]);
            }
        }
        
        return $cartarray;
    }
}

