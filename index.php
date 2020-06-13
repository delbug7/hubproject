<?php


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

require_once HUBPATH_BASE . '/requires/framework.php';



//hard codde lol
if(file_exists('configuration.php')){
    require_once 'configuration.php';
    echo '<title>' .\Config::$site_name. '</title>';
    echo '<p>Nom du site: '.\Config::$site_name.'</p>';
    echo '<p>Description du site: '.\Config::$site_desc.'</p>';
    echo '<p>Email du WebMaster: '.\Config::$site_email.'</p>';
    echo '<p>Couleur principal du site: <strong style="color:' .\Config::$site_color. '">' .\Config::$site_color. '</strong></p>';
}
