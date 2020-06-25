<?php

namespace Administration\app;

defined('_HUBACCES') or header('Location: /index.php');

class Modifconfig{

    public static function name($param){
        if($param == 'site_email'){
            return 'E-mail';
        }else if($param == 'site_pseudo'){
            return 'Pseudo';
        }else if($param == 'site_name'){
            return 'Nom du site';
        }else if($param == 'site_desc'){
            return 'Description du site';
        }
        return null;
    }

    public static function typeInput($param){
        if($param == 'site_email'){
            return '<input type="email" name="value" value="' .\Config::$site_email. '">';
        }else if($param == 'site_pseudo'){
            return '<input type="text" name="value" value="' .\Config::$site_pseudo. '">';
        }else if($param == 'site_name'){
            return '<input type="text" name="value" value="' .\Config::$site_name. '">';
        }else if($param == 'site_desc'){
            return '<textarea name="value">' .\Config::$site_desc. '</textarea>';
        }
        return null;
    }

    /**
     * @param null $text
     * @param null $textPerso
     * @return null|string
     */
    public static function getValue($text = null, $textPerso = null){
        if($text != null && $textPerso == null) {
            if ($text == 'site_name') {
                return '$site_name = \'' . \Config::$site_name . '\';';
            } else if ($text == 'site_pseudo') {
                return '$site_pseudo = \'' . \Config::$site_pseudo . '\';';
            } else if ($text == 'site_email') {
                return '$site_email = \'' . \Config::$site_email . '\';';
            } else if ($text == 'site_desc') {
                return '$site_desc = \'' . \Config::$site_desc . '\';';
            }
            return null;
        }else if($text != null && $textPerso != null){
            if ($text == 'site_name') {
                return '$site_name = \'' . $textPerso . '\';';
            } else if ($text == 'site_pseudo') {
                return '$site_pseudo = \'' . $textPerso . '\';';
            } else if ($text == 'site_email') {
                return '$site_email = \'' . $textPerso . '\';';
            } else if ($text == 'site_desc') {
                return '$site_desc = \'' . $textPerso . '\';';
            }
            return null;
        }
    }
}