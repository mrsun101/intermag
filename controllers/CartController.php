<?php


class CartController {
    
    public static function ReturnResult()
    {
        $json_data = array();
        $json_data['count'] = Cart::countItems();
        $json_data['sum'] = Cart::sumItems();
        
        echo json_encode($json_data);
        return TRUE;
    }

    public function actionAdd($id)
    {
        Cart::addProduct($id);
        return self::ReturnResult();
    }
    
    public function actionSub($id)
    {
        Cart::subProduct($id);
        return self::ReturnResult();
    }
    
    public function actionClear()
    {
        Cart::clear();
        return self::ReturnResult();        
    }
    
    public function actionInfo()
    {
        return self::ReturnResult();
    }
}
