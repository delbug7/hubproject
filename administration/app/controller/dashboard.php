<?php

namespace Administration\app;

defined('_HUBACCES') or header('Location: /index.php');


if(!isset($_SESSION['pseudo'], $_COOKIE['PHPSESSID'])){
    header('Location: index.php');
}
if($_COOKIE['PHPSESSID'] != \Temp::$phpsessid){
    header('Location: index.php');
}

require_once HUBPATH_ADMINISTRATION . DIRECTORY_SEPARATOR . 'site' . DIRECTORY_SEPARATOR . 'dashboard.php';