<?php 

class Autoloader
{
    public static function Autoload($class){ 
        require  $class.'.php';
    }
    public static function register()
    {
    return spl_autoload_register(array(__CLASS__,'Autoload'));
    }
}
