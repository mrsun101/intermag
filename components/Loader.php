<?php

spl_autoload_register(array('Loader','autoload_components_class'));
spl_autoload_register(array('Loader','autoload_controllers_class'));
spl_autoload_register(array('Loader','autoload_models_class'));
spl_autoload_register(array('Loader','autoload_views_class'));
spl_autoload_register(array('Loader','autoload_smarty'));

class Loader {
   
    public static function autoload_components_class($class_name)
    {           
        $path = ROOT."\\components\\$class_name.php";
        if (file_exists($path))        
            require_once "$path";
    }
       
    public static function autoload_controllers_class($class_name)
    {      
        $path = ROOT."\\controllers\\$class_name.php";
        if (file_exists($path))        
             require_once "$path";
    }
    public static function autoload_models_class($class_name)
    {      
        $path = ROOT."\\models\\$class_name.php";
        if (file_exists($path))        
             require_once "$path";
    }
    
    public static function autoload_views_class($class_name)
    {      
        $path = ROOT."\\views\\$class_name.php";
        if (file_exists($path))        
             require_once "$path";
    }
    
    public static function autoload_smarty($class_name)
    {      
        $path = ROOT."\\libs\\$class_name.class.php";
        if (file_exists($path))        
             require_once "$path";
    }
}
