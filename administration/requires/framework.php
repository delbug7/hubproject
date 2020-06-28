<?php

defined('_HUBACCES') or header('Location: ' .DIRECTORY_SEPARATOR. 'index.php');
if (!file_exists(HUBPATH_CONFIGURATION_FILE)) {
    header('Location: ' .DIRECTORY_SEPARATOR. 'index.php');
    exit;
}
if(!isset($_GET['page'])){
    $_GET['page'] = 'dashboard';
}
if(!isset($_SESSION['language'])){
    $textMain = HUBPATH_ADMINISTRATION . DIRECTORY_SEPARATOR . 'language' . DIRECTORY_SEPARATOR . 'index.php';
}else {
    if (!isset($_SESSION['pseudo'])) {
        $controller = 'app' .DIRECTORY_SEPARATOR. 'controller' .DIRECTORY_SEPARATOR. 'login.php';
    }

    if (isset($_GET['page'])) {
        if ($_GET['page'] == 'dashboard') {
            $textMain = HUBPATH_SITEDIR . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'dashboard' . DIRECTORY_SEPARATOR . 'dashboard.php';
        } else if ($_GET['page'] == 'module') {
            $textMain = HUBPATH_SITEDIR . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'module' . DIRECTORY_SEPARATOR . 'config.php';
        } else if ($_GET['page'] == 'pages') {
            $textMain = HUBPATH_SITEDIR . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'pages.php';
        } elseif ($_GET['page'] == 'setting') {
            $textMain = HUBPATH_SITEDIR . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'setting' . DIRECTORY_SEPARATOR . 'setting.php';
        } else {
            $textMain = HUBPATH_SITEDIR . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'dashboard' . DIRECTORY_SEPARATOR . 'dashboard.php';
        }
    } else {
        $textMain = HUBPATH_SITEDIR . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'dashboard' . DIRECTORY_SEPARATOR . 'dashboard.php';
    }
}