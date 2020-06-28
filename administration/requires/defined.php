<?php

defined('_HUBACCES') or header('Location: /index.php');

$rootPath  = __DIR__;
$rootPath = str_replace('administration/requires', '', $rootPath);
$parentF = explode(DIRECTORY_SEPARATOR, $rootPath);

define('HUBPATH_ROOT',          implode(DIRECTORY_SEPARATOR, $parentF));
define('HUBPATH_SITE',          HUBPATH_ROOT);
define('HUBPATH_CONFIGURATION_FILE',  HUBPATH_ROOT. 'configuration.php');
define('HUBPATH_ADMINISTRATION', HUBPATH_ROOT . 'administration');
define('HUBPATH_SITEDIR', HUBPATH_ADMINISTRATION . DIRECTORY_SEPARATOR. 'site');
define('HUBPATH_TMP', HUBPATH_ADMINISTRATION . DIRECTORY_SEPARATOR. 'tmp');
define('HUBPATH_PAGES', HUBPATH_SITE. 'site' .DIRECTORY_SEPARATOR. 'pages');
define('HUBPATH_LANGUAGE', HUBPATH_ADMINISTRATION. DIRECTORY_SEPARATOR. 'language');
