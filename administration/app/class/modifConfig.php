<?php

namespace Administration\app;

defined('_HUBACCES') or header('Location: /index.php');

class Modifconfig{

    public static function name($param){
        if($param == 'site_email'){
            return \Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_EMAIL"];
        }else if($param == 'site_pseudo'){
            return \Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_PSEUDO"];
        }else if($param == 'site_name'){
            return \Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_SITE_TITLE"];
        }else if($param == 'site_desc'){
            return \Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_SITE_DESCRIPTION"];
        }else if($param == 'site_password'){
            return \Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_PASSWORD"];
        }else if($param == 'site_isOnline'){
            return \Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_SITE_IS_ONLINE"];
        }
        return null;
    }

    public static function typeInput($param){
        if($param == 'site_email'){
            return '<input type="email" name="value" value="' .\Config::$site_email. '" required>';
        }else if($param == 'site_pseudo'){
            return '<input type="text" name="value" value="' .\Config::$site_pseudo. '" required>';
        }else if($param == 'site_name'){
            return '<input type="text" name="value" value="' .\Config::$site_name. '" required>';
        }else if($param == 'site_desc'){
            return '<textarea name="value">' .\Config::$site_desc. '</textarea>';
        }else if($param == 'site_password'){
            $form = '<label>' .\Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_CURRENT_PASSWORD"]. '</label>';
            $form .= '<input type="password" name="value" required><br>';
            $form .= '<label>' .\Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_NEW_PASSWORD"]. '</label>';
            $form .= '<input type="password" name="value1" required><br>';
            $form .= '<label>' .\Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_RETYPE_PASSWORD"]. '</label>';
            $form .= '<input type="password" name="value2" required><br>';
            return $form;
        }else if($param == 'site_isOnline'){
            $form = '<input type="checkbox" name="value" ';
            if(\Config::$site_isOnline){
                $form .= 'checked';
            }
            $form .= '><br>';
            return $form;
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
            }else if($text == 'site_password'){
                return '$site_password = \'' .\Config::$site_password. '\';';
            }else if($text == 'site_isOnline'){
                return '$site_isOnline = ';
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
            }else if ($text == 'site_password'){
                return '$site_password = \'' .$textPerso. '\';';
            }else if ($text == 'site_isOnline'){
                return '$site_isOnline = \'' .$textPerso. '\';';
            }
            return null;
        }
    }
}