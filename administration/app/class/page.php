<?php

namespace Administration\app;

defined('_HUBACCES') or header('Location: /index.php');

class Page{

    public static function getPage(){
        if ($handle = opendir(HUBPATH_PAGES)) {
            while (false !== ($entry = readdir($handle))) {
                if($entry != '.' && $entry != '..') {
                    if($entry != 'index.php'){

                    }
                }
            }
            closedir($handle);
        }
    }
}