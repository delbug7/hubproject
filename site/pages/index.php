<?php
defined('_HUBACCES') or header('Location: /index.php');

if(file_exists('configuration.php')){
require_once 'configuration.php';
echo '<title>' .\Config::$site_name. '</title>';
echo '<p>Nom du site: '.\Config::$site_name.'</p>';
echo '<p>Description du site: '.\Config::$site_desc.'</p>';
echo '<p>Email du WebMaster: '.\Config::$site_email.'</p>';
echo '<p>Couleur principal du site: <strong style="color:' .\Config::$site_color. '">' .\Config::$site_color. '</strong></p>';
}

if ($handle = opendir(HUBPATH_PAGES)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != '.' && $entry != '..') {
            if ($entry != 'index.php') {
                if (file_exists(HUBPATH_PAGES . DIRECTORY_SEPARATOR . $entry . '/' . $entry . '.xml')) {
                    $xml = simplexml_load_file(HUBPATH_PAGES . DIRECTORY_SEPARATOR . $entry . '/' . $entry . '.xml');
                    $name = str_replace(' ', '_', $xml->name);
                    if($xml->active == true){
                        echo '<a href="index.php?page='.$name.'">'.$xml->name.'</a><br>';
                    }
                }
            }
        }
    }
}
closedir($handle);
// force push