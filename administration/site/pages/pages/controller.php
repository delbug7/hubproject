<?php defined('_HUBACCES') or header('Location: /index.php');

if(isset($_GET['page'], $_GET['file'], $_GET['Supprimer'])){
    if($_GET['page'] == 'pages' && $_GET['Supprimer'] == 'supprimer' && !isset($_GET['confirm'])){
        echo '<script>
                $result = confirm(\'Êtes vous sûr ?\');
                if($result){
                    location.replace("index.php?page=pages&file=' .$_GET['file']. '&Supprimer=supprimer&confirm=Ok");
            }</script>';
    }else if($_GET['page'] == 'pages' && $_GET['Supprimer'] == 'supprimer' && isset($_GET['confirm'], $_GET['file'])){
        $dir = HUBPATH_PAGES . DIRECTORY_SEPARATOR . lcfirst($_GET['file']);
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir."/".$object) == "dir") rmdir($dir."/".$object); else unlink($dir."/".$object);
                }
            }
            reset($objects);
            if(!rmdir($dir)){
                echo '<script>alert("Impossible de supprimer le fichier. Donner les droits en écriture sur le dossier: ' .HUBPATH_PAGES. '");</script>';
            }else {
                header('Location: index.php?page=pages');
            }
        }
    }
}

if(isset($_GET['PageName'], $_GET['PageDesc'], $_GET['ValidPage'])){
    $dir = str_replace(' ', '_', $_GET['PageName']);
    $dir = HUBPATH_PAGES . DIRECTORY_SEPARATOR . lcfirst($dir);
    if(is_dir($dir)){
        echo '<script>alert("Impossible de créer le dossier: ' .$dir. ', car il existe déjà.");</script>';
    }else{
        mkdir($dir);
        if(!is_dir($dir)){
            echo '<script>alert("Impossible de créer le dossier: ' .$dir. '");</script>';
        }
        $file = str_replace(' ', '_', $_GET['PageName']);
        $file = $dir . DIRECTORY_SEPARATOR . lcfirst($file). '.xml';
        if(\Administration\app\Fopen::createFile($file)){
            echo '<script>alert("Impossible de créer le fichier: ' .$dir. '/' .$_GET['PageName']. '.xml");</script>';
        }
        $textxml = '<?xml version="1.0" encoding="utf-8"?>'.PHP_EOL.'<xml>'.PHP_EOL.'<name>' .$_GET['PageName']. '</name>'.PHP_EOL.'<description>' .$_GET['PageDesc']. '</description>'.PHP_EOL.'<active>true</active>'.PHP_EOL.'<filename>index.php</filename>'.PHP_EOL.'</xml>';
        if(\Administration\app\Fopen::writeFile($file, $textxml)){
            echo '<script>alert("Impossible d\'écrire le fichier: ' .$dir. '/' .$_GET['PageName']. '.xml");</script>';
        }
        file_put_contents($file, implode(PHP_EOL, file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
        if(\Administration\app\Fopen::createFile($dir . DIRECTORY_SEPARATOR. 'index.php')){
            echo '<script>alert("Impossible d\'écrire le fichier: ' .$dir . DIRECTORY_SEPARATOR. 'index.php");</script>';
        }
        $textphp = '<?php defined(\'_HUBACCES\') or header(\'Location: /index.php\')?>' .PHP_EOL. '<p>test</p>';
        if(\Administration\app\Fopen::writeFile($dir . DIRECTORY_SEPARATOR. 'index.php', $textphp)){
            echo '<script>alert("Impossible d\'écrire le fichier: ' .$dir. '/index.php");</script>';
        }
    }
    header('Location: index.php?page=pages');
}

if(isset($_POST['file'], $_POST['text'])){
    if(\Administration\app\Fopen::removeContentFile(HUBPATH_PAGES . DIRECTORY_SEPARATOR . $_GET['file'] . DIRECTORY_SEPARATOR. 'index.php')) {
        if (\Administration\app\Fopen::writeFile(HUBPATH_PAGES . DIRECTORY_SEPARATOR . $_GET['file'] . DIRECTORY_SEPARATOR . 'index.php', '<?php defined(\'_HUBACCES\') or header(\'Location: /index.php\'); ?>' . PHP_EOL . $_POST['text'])) {
            echo '<script>alert("Fichier modifier avec succes");</script>';
            echo '<meta http-equiv="refresh" content="5;URL=index.php?page=pages">';
        } else {
            echo '<script>alert("Impossible de modifier le fichier");</script>';
            echo '<meta http-equiv="refresh" content="5;URL=index.php?page=pages">';
        }
    }else{
        echo '<script>alert("Impossible de modifier le fichier");</script>';
        echo '<meta http-equiv="refresh" content="5;URL=index.php?page=pages">';
    }
}