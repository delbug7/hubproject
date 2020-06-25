<?php
session_start();

define('HUBPROJECT_MIN_VERSION', '7.2.14');

if (version_compare(PHP_VERSION, HUBPROJECT_MIN_VERSION, '<'))
{
    echo 'Le projet a était développer sous la version de php:  ' .HUBPROJECT_MIN_VERSION;
}

//défini une constante pour éviter l'accès direct aux fichiers.
define('_HUBACCES', 1);

if (!defined('_HUBDEFINES'))
{
    define('HUBPATH_BASE', __DIR__);
    require_once HUBPATH_BASE . '/requires/defined.php';
}
if(!isset($_GET['page'])){
    $_GET['page'] = 'dashboard';
}
require_once HUBPATH_BASE . '/requires/framework.php';
require_once HUBPATH_BASE . '/requires/global.php';