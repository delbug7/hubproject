<?php

namespace Install;
defined('_HUBACCES') or header('Location: /index.php');

require HUBPATH_INSTALLATION .'/app/class/autoloader.php';
Autoloader::register();

$form = new Form;
$etape = new Etape;
$language = new Language;