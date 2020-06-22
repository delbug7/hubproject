<?php

namespace Administration\app;

defined('_HUBACCES') or header('Location: /index.php');

class Login{

    public static function login(){

        $_SESSION['pseudo'] = $_POST['pseudo'];
        if(!file_exists(HUBPATH_TMP . DIRECTORY_SEPARATOR. 'tmp.php')){
            Fopen::createFile(HUBPATH_TMP . DIRECTORY_SEPARATOR. 'tmp.php');
        }else {
            Fopen::removeContentFile(HUBPATH_TMP . DIRECTORY_SEPARATOR. 'tmp.php');
        }
        if(0 == filesize( HUBPATH_TMP . DIRECTORY_SEPARATOR. 'tmp.php' )) {
            Fopen::writeFile(HUBPATH_TMP . DIRECTORY_SEPARATOR. 'tmp.php', '<?php' . PHP_EOL . 'class Temp{');
            Fopen::writeFile(HUBPATH_TMP . DIRECTORY_SEPARATOR. 'tmp.php', 'public static $phpsessid = \'' . $_COOKIE['PHPSESSID'] . '\';');
            Fopen::writeFile(HUBPATH_TMP . DIRECTORY_SEPARATOR. 'tmp.php', '}');
        }
    }

    public static function disconnect(){
        if(file_exists(HUBPATH_TMP . DIRECTORY_SEPARATOR. 'tmp.php')){
            Fopen::removeContentFile(HUBPATH_TMP . DIRECTORY_SEPARATOR. 'tmp.php');
        }
        session_unset();
        session_destroy();
        unset($_SESSION['pseudo']);
    }
}