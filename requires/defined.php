<?php

defined('_HUBACCES') or header('Location: /index.php');

$parentF = explode(DIRECTORY_SEPARATOR, HUBPATH_BASE);


define('HUBPATH_ROOT',          implode(DIRECTORY_SEPARATOR, $parentF));
define('HUBPATH_SITE',          HUBPATH_ROOT);
define('HUBPATH_CONFIGURATION_FILE', HUBPATH_ROOT . DIRECTORY_SEPARATOR . 'configuration.php');
define('HUBPATH_INSTALLATION', HUBPATH_ROOT . DIRECTORY_SEPARATOR . 'installation');
define('HUBPATH_LIB',         HUBPATH_BASE . DIRECTORY_SEPARATOR . 'lib');
define('HUBPATH_PAGES', HUBPATH_SITE . DIRECTORY_SEPARATOR. 'site' .DIRECTORY_SEPARATOR. 'pages');