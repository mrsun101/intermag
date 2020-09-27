<?php

class AdminView {
    
    public static function EterForm()
    {
        $smarty = new Smarty();        
        
        $smarty->left_delimiter = '<!--{';
        $smarty->right_delimiter = '}-->';
        //var_dump($smarty->getTemplateDir());
        
        $smarty->setTemplateDir('templates\admin');
        //var_dump($smarty->getTemplateDir());
        //die();
        //$smarty->template_dir = 'temlates_\admin';
        $smarty->display("formenter.html");
    }
    
    public static function SectionAdmin()
    {
        $smarty = new Smarty();        
        
        $smarty->left_delimiter = '<!--{';
        $smarty->right_delimiter = '}-->';
        
        $smarty->display("admin\sectionadmin.html");
    }
    
    public static function ProductAdmin()
    {
        $smarty = new Smarty();        
        
        $smarty->left_delimiter = '<!--{';
        $smarty->right_delimiter = '}-->';
        
        $smarty->display("admin\productsadmin.html");
    }
}
