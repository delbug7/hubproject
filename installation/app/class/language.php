<?php

namespace Install;
defined('_HUBACCES') or header('Location: /index.php');
class Language{
    private $UserLng;
    private $langSelected;
    public $lang = array();


    public function __construct($userLanguage = 'fr_FR'){

        $this->UserLng = $userLanguage;
        //construct lang file
        $langFile = HUBPATH_INSTALLATION . '/language/'. $this->UserLng . '/'. $this->UserLng .'.ini';
        if(!file_exists($langFile)){
            //throw new Execption("Language could not be loaded"); //or default to a language
        }

        $this->lang = parse_ini_file($langFile);
    }

    public function getUserLanguage(){
        return $this->lang;
    }

}