<?php

namespace Administration\app;

defined('_HUBACCES') or header('Location: /index.php');

    if(isset($_POST['pseudo'], $_POST['password'])){

        $pseudo = \Config::$site_pseudo;
        $password = \Config::$site_password;
        if($_POST['pseudo'] == $pseudo && password_verify($_POST['password'], $password)){
            Login::login();
            header('Location: index.php');
        }
    }
if(!isset($_SESSION['pseudo'])) {
    require_once HUBPATH_ADMINISTRATION . DIRECTORY_SEPARATOR . 'site' . DIRECTORY_SEPARATOR . 'login.php';
}