<?php

defined('_HUBACCES') or header('Location: /index.php');

// Check si le fichier de config existe et si le code d'installation est présent.
if (!file_exists(HUBPATH_CONFIGURATION_FILE)) {
    if (file_exists(HUBPATH_INSTALLATION . '/index.php')) {
        header('Location: ' . substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], 'index.php')) . 'installation/index.php');
        exit;
    } else {
        echo 'Aucun fichier de configuration n\'est trouvé ainsi que le système d\'installation.';
        exit;
    }
}
if(!isset($_GET['page'])){
    $_GET['page'] = 'index';
}
if($_GET['page'] == 'index') {
    require_once HUBPATH_PAGES . DIRECTORY_SEPARATOR . 'index.php';
}else {
    require_once HUBPATH_PAGES . DIRECTORY_SEPARATOR . lcfirst($_GET['page']) . DIRECTORY_SEPARATOR. 'index.php';
}