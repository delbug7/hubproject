<?php

defined('_HUBACCES') or header('Location: /index.php');
if(isset($_GET['language'])){
    if(file_exists(HUBPATH_LANGUAGE . DIRECTORY_SEPARATOR . $_GET['language'] . DIRECTORY_SEPARATOR . $_GET['language']. '.ini')) {
        $_SESSION['language'] = $_GET['language'];
        header('Location: index.php');
    }
}
echo '<div class="main-div">
    <h1 class="page-title">Selection du language</h1>
    <div class="page-content"><form method="get"><label>Séléctionnez votre language: </label><select name="language">';
if ($handle = opendir(HUBPATH_LANGUAGE)) {
    while (false !== ($entry = readdir($handle))) {
        if($entry != '.' && $entry != '..') {
                if(file_exists(HUBPATH_LANGUAGE . DIRECTORY_SEPARATOR. $entry. DIRECTORY_SEPARATOR .$entry. '.xml')) {
                    $xml = simplexml_load_file(HUBPATH_LANGUAGE . DIRECTORY_SEPARATOR . $entry . DIRECTORY_SEPARATOR . $entry . '.xml');
                    echo '<option value="' .$xml->files->name. '">' .$xml->name. '</option>';
                }
        }
    }
    closedir($handle);
}

echo '</select>';
echo'<br><input type="submit"></form></div>
</div>';