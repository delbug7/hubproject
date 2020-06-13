<?php
//Check si la version de php est la même ou est suppérieur à la version de dev.
define('HUBPROJECT_MIN_VERSION', '7.2.14');
if (version_compare(PHP_VERSION, HUBPROJECT_MIN_VERSION, '<'))
{
    echo 'Le projet a était développer sous la version de php:  ' .HUBPROJECT_MIN_VERSION;
}

//défini une constante pour éviter l'accès direct aux fichiers.
define('_HUBACCES', 1);

// require Back End......................
require_once __DIR__ . '/app/global.php';

// require Front End............................
require HUBPATH_INSTALLATION .'/site/index.php';

// Enregistrer le compte Owner dans la bdd apres la confirmation des informations a la fin