<?php

class ViewIndex
{
    private static function display($tpl,$activgrid=1)
    {
        $smarty = new Smarty();
        
        $arrayMenu = GlobalMenu::returnArrayMenu();
        
        $smarty->assign('arraymenu',$arrayMenu);
        $smarty->assign('activgrid',$activgrid);
        $smarty->left_delimiter = '<!--{';
        $smarty->right_delimiter = '}-->';
        
        $smarty->display($tpl);
    }

    public static function view($discountarray,$newproducts,$bestproducts)
    {
        $smarty = new Smarty();        
        $arrayMenu = GlobalMenu::returnArrayMenu();        
        $smarty->assign('arraymenu',$arrayMenu);
        //$smarty->assign('activgrid',$activgrid);
        $smarty->assign('discountarray',$discountarray);
        $smarty->assign('newproducts',$newproducts);
        $smarty->assign('bestproducts', $bestproducts);
        $smarty->left_delimiter = '<!--{';
        $smarty->right_delimiter = '}-->';
        
        $smarty->display("index.tpl");
        //self::display("index.html");
    }
    
    public static function error()
    {
        self::display("404.html");
    }    
    
    public static function contact()
    {
        self::display("contact.html");
    }
    
    public static function checkout($cartarray)
    {
        $smarty = new Smarty();        
        $arrayMenu = GlobalMenu::returnArrayMenu();        
        $smarty->assign('arraymenu',$arrayMenu);
        
        $smarty->assign('cartarray',$cartarray);
        
        $smarty->left_delimiter = '<!--{';
        $smarty->right_delimiter = '}-->';
        
        $smarty->display("checkout.html");
    }
    
    public static function decor()
    {
        self::display("decor.html");
    }
    
    public static function health()
    {
        self::display("health.html");
    }
    
    public static function mobile()
    {
        self::display("mobile.html");
    }
   
    
    public static function category($idcat,$arrayofcategory,$page,$kolrows)
    {
        $smarty = new Smarty();        
        $arrayMenu = GlobalMenu::returnArrayMenu();        
        $smarty->assign('arraymenu',$arrayMenu);
        $baselink = "/category/$idcat/";
        $smarty->assign('groupeproducts',$arrayofcategory);
        $smarty->assign('pages',mypagenavigation::getPage($kolrows, PER_PAGE, $page, $baselink));
        $smarty->left_delimiter = '<!--{';
        $smarty->right_delimiter = '}-->';
        
        $smarty->display("products.html");
    }
    
    public static function single($single)
    {
        $smarty = new Smarty();        
        $arrayMenu = GlobalMenu::returnArrayMenu();        
        $smarty->assign('arraymenu',$arrayMenu);
        $smarty->assign('value',$single);
        $smarty->left_delimiter = '<!--{';
        $smarty->right_delimiter = '}-->';
        
        $smarty->display("single.html");
    }
}
