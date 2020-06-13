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