<?php defined('_HUBACCES') or header('Location: '.DIRECTORY_SEPARATOR.'index.php'); ?>
<?php

if(isset($_GET['param']) && !isset($_GET['verif'])){
    $label = \Administration\app\Modifconfig::name($_GET['param']);
    if(!is_null($label)){
        $input = \Administration\app\Modifconfig::typeInput($_GET['param']);
        echo '<h2>Modification des information du site:</h2>';
        echo '<form>
                <label>' .$label. '</label>
                '.$input.'
                <input type="hidden" name="page" value="setting">
                <input type="hidden" name="param" value="' .$_GET['param']. '">
                <input type="hidden" name="verif" value="true">
                <input type="submit" name="modif" value="Modification">
               </form>';
    }else{
        header('Location: index.php?page=setting');
    }
}else if(isset($_GET['verif'], $_GET['param'])){
    if(!isset($_GET['value'])){
        $_GET['value'] = null;
    }
    $replace = \Administration\app\Modifconfig::getValue($_GET['param']);
    $replacetext = \Administration\app\Modifconfig::getValue($_GET['param'], $_GET['value']);
    if(!is_null($replace)) {
        if($_GET['param'] == 'site_password'){
            if(password_verify($_GET['value'], \Config::$site_password)){
                if($_GET['value1'] == $_GET['value2']){
                    $replacetext = '$site_password = \'' .password_hash($_GET['value1'], PASSWORD_DEFAULT). '\';';
                }else {
                    echo '<h5>' .\Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_PASSWORD_NOT_MATCH"]. '</h5>';
                    echo '<meta http-equiv="refresh" content="5;URL=index.php?page=setting">';
                    exit();
                }
            }else{
                echo '<h5>' .\Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_WRONG_PASSWORD"]. '</h5>';
                echo '<meta http-equiv="refresh" content="5;URL=index.php?page=setting">';
                exit();
            }
        }else if($_GET['param'] == 'site_isOnline'){
            if($_GET['value'] == 'on'){
                $replace .= 'false;';
                $replacetext = '$site_isOnline = true;';
            }else{
                $replace .= 'true;';
                $replacetext = '$site_isOnline = false;';
            }
        }
        if (\Administration\app\Fopen::removeString(HUBPATH_CONFIGURATION_FILE, $replace, $replacetext)) {
            echo '<h5>' .\Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_SUCCES_REPLACE"]. '</h5>';
            echo '<meta http-equiv="refresh" content="5;URL=index.php?page=setting">';
        } else {
            echo '<h5>' .\Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_ERROR_REPLACE"]. '</h5>';
            echo '<meta http-equiv="refresh" content="5;URL=index.php?page=setting">';
        }
    }else{
        echo '<h5>' .\Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_ERROR_MODIF"]. '</h5>';
        echo '<meta http-equiv="refresh" content="5;URL=index.php?page=setting">';
    }
}