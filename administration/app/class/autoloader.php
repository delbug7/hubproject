<?php

namespace Administration\app;

defined('_HUBACCES') or header('Location: /index.php');
/**
 * Class Autoloader
 */
class Autoloader{

    /**
     * Enregistre notre autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class){
        $class = str_replace( __NAMESPACE__, '', $class);
        $class = str_replace('\\', '/', $class);
        require HUBPATH_ADMINISTRATION . DIRECTORY_SEPARATOR. 'app' .DIRECTORY_SEPARATOR. 'class'  .$class . '.php';
    }

}