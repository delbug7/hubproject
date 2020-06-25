<?php defined('_HUBACCES') or header('Location: /index.php'); ?>
<?php

if(isset($_GET['param']) && !isset($_GET['value'])){
    $label = \Administration\app\Modifconfig::name($_GET['param']);
    if(!is_null($label)){
        $input = \Administration\app\Modifconfig::typeInput($_GET['param']);
        echo '<h2>Modification des information du site:</h2>';
        echo '<form>
                <label>' .$label. '</label><br>
                '.$input.'
                <input type="hidden" name="page" value="setting">
                <input type="hidden" name="param" value="' .$_GET['param']. '">
                <input type="submit" name="modif" value="Modification">
               </form>';
    }
}else if(isset($_GET['value'], $_GET['param'])){
    $replace = \Administration\app\Modifconfig::getValue($_GET['param']);
    $replacetext = \Administration\app\Modifconfig::getValue($_GET['param'], $_GET['value']);
    if(!is_null($replace)) {
        if (\Administration\app\Fopen::removeString(HUBPATH_CONFIGURATION_FILE, $replace, $replacetext)) {
            echo 'Modification réussi, redirection...';
            echo '<meta http-equiv="refresh" content="5;URL=index.php?page=setting">';
        } else {
            echo 'Erreur lors du remplacement.';
        }
    }else{
        echo 'Erreur modification impossible';
    }
}
