<?php

namespace Administration\app;

defined('_HUBACCES') or header('Location: /index.php');

class Login{

    public static function login(){

        $_SESSION['pseudo'] = $_POST['pseudo'];
        if(!dir(HUBPATH_TMP)){
            if(!mkdir(HUBPATH_TMP)){
                echo 'Impossible d\'écrire dans le dossier Administration';
                exit();
            }
        }
        if(!file_exists(HUBPATH_TMP . DIRECTORY_SEPARATOR. 'tmp.php')){
            if(!Fopen::createFile(HUBPATH_TMP . DIRECTORY_SEPARATOR. 'tmp.php')){
                echo '<script>alert("Erreur impossible d\\\'écrire dans le répertoire: ' .HUBPATH_TMP. '");</script>';
            }else{
                header('Location: index.php');
            }
        }else {
            if(!Fopen::removeContentFile(HUBPATH_TMP . DIRECTORY_SEPARATOR. 'tmp.php')){
                echo '<script>alert("Erreur impossible d\\\'écrire dans le répertoire: ' .HUBPATH_TMP. '");</script>';
            }else{
                header('Location: index.php');
            }
        }
        if(0 == filesize( HUBPATH_TMP . DIRECTORY_SEPARATOR. 'tmp.php' )) {
            if(Fopen::writeFile(HUBPATH_TMP . DIRECTORY_SEPARATOR. 'tmp.php', '<?php' . PHP_EOL . 'class Temp{')) {
                Fopen::writeFile(HUBPATH_TMP . DIRECTORY_SEPARATOR . 'tmp.php', 'public static $phpsessid = \'' . $_COOKIE['PHPSESSID'] . '\';');
                Fopen::writeFile(HUBPATH_TMP . DIRECTORY_SEPARATOR . 'tmp.php', '}');
                header('Location: index.php');
            }else{
                echo '<script>alert("Erreur impossible d\\\'écrire dans le répertoire: ' .HUBPATH_TMP. '");</script>';
            }
        }
    }

    public static function disconnect(){
        if(file_exists(HUBPATH_TMP . DIRECTORY_SEPARATOR. 'tmp.php')){
            if(!Fopen::removeContentFile(HUBPATH_TMP . DIRECTORY_SEPARATOR. 'tmp.php')){
                echo '<script>alert("Erreur impossible d\\\'écrire dans le fichier: ' .HUBPATH_TMP. '/tmp.php");</script>';
            }
        }
        session_unset();
        session_destroy();
        unset($_SESSION['pseudo']);
        unset($_SESSION['language']);
    }
}