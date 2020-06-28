<?php defined('_HUBACCES') or header('Location: ' .DIRECTORY_SEPARATOR. 'index.php'); ?>
<?php
require_once '../app/class/login.php';
session_start();

\Administration\app\Login::disconnect();
header('location: /administration/index.php');