<?php

defined('_HUBACCES') or header('Location: /index.php');

require_once HUBPATH_CONFIGURATION_FILE;

require_once HUBPATH_ADMINISTRATION . DIRECTORY_SEPARATOR. 'requires' .DIRECTORY_SEPARATOR. 'instance.php';

if(!isset($_SESSION['pseudo'])){
    require_once HUBPATH_ADMINISTRATION . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'login.php';
}else {
    if (file_exists(HUBPATH_ADMINISTRATION . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'tmp.php')) {
        require_once HUBPATH_ADMINISTRATION . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'tmp.php';
        if ($_COOKIE['PHPSESSID'] == \Temp::$phpsessid) {
            require_once HUBPATH_ADMINISTRATION . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . 'dashboard.php';
        } else {
            unset($_SESSION['pseudo']);
            header('location: /administration/index.php');
        }
    }
}
