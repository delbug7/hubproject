<?php

defined('_HUBACCES') or header('Location: /index.php');
if (!file_exists(HUBPATH_CONFIGURATION_FILE)) {
    header('Location: /index.php');
    exit;
}

if(!isset($_SESSION['pseudo'])){
    $controller = 'app/controller/login.php';
}

if(isset($_GET['page'])){
    if($_GET['page'] == 'dashboard'){
        $textMain = HUBPATH_SITEDIR . DIRECTORY_SEPARATOR. 'pages' .DIRECTORY_SEPARATOR. 'dashboard' .DIRECTORY_SEPARATOR. 'dashboard.php';
    }else if($_GET['page'] == 'install-module'){
        $textMain = HUBPATH_SITEDIR . DIRECTORY_SEPARATOR. 'pages' .DIRECTORY_SEPARATOR. 'modules' .DIRECTORY_SEPARATOR. 'install.php';
    }else if($_GET['page'] == 'module'){
        $textMain = HUBPATH_SITEDIR . DIRECTORY_SEPARATOR. 'pages' .DIRECTORY_SEPARATOR. 'module' .DIRECTORY_SEPARATOR. 'config.php';
    }else if($_GET['page'] == 'search-module'){
        $textMain = HUBPATH_SITEDIR . DIRECTORY_SEPARATOR. 'pages' .DIRECTORY_SEPARATOR. 'modules' .DIRECTORY_SEPARATOR. 'search.php';
    }else{
        $textMain = HUBPATH_SITEDIR . DIRECTORY_SEPARATOR. 'pages' .DIRECTORY_SEPARATOR. 'dashboard' .DIRECTORY_SEPARATOR. 'dashboard.php';
    }
}else {
    $textMain = HUBPATH_SITEDIR . DIRECTORY_SEPARATOR. 'pages' .DIRECTORY_SEPARATOR. 'dashboard' .DIRECTORY_SEPARATOR. 'dashboard.php';
}