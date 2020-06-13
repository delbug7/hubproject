<?php

defined('_HUBACCES') or header('Location: /index.php');

// Check si le fichier de config existe et si le code d'installation est présent.
if (file_exists(HUBPATH_CONFIGURATION_FILE)) {
    header('Location: ../index.php');
    exit;
}