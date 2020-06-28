<?php

namespace Administration\app;

defined('_HUBACCES') or header('Location: /index.php');
class Language{

    /**
     * @param $lang
     */
    public static function getLanguage($lang){
        $langFile = HUBPATH_ADMINISTRATION . DIRECTORY_SEPARATOR. 'language'.DIRECTORY_SEPARATOR . $lang . DIRECTORY_SEPARATOR . $lang. '.ini';
        if(!file_exists($langFile)){
            return false;
        }
        return parse_ini_file($langFile);
    }

}