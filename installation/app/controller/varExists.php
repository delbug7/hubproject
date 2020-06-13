<?php
namespace Install;

defined('_HUBACCES') or header('Location: /index.php');

$message = '';
if(!file_exists(HUBPATH_TMP . '/tmp.php')){
    Fopen::createFile(HUBPATH_TMP . '/tmp.php');
}else if(!isset($_POST['sql_host'], $_POST['sql_user'], $_POST['sql_bdd'], $_POST['site_name'], $_POST['site_color'], $_POST['site_email'], $_POST['site_pseudo'], $_POST['site_password'], $_POST['site_password_v'])){
    $message .= Message::warningMessage($language->getUserLanguage()["ERR_TMP_EXIST"]);

}

if(isset($_POST['sql_host'], $_POST['sql_user'], $_POST['sql_bdd'])){
    $host = addslashes($_POST['sql_host']);
    $username = addslashes($_POST['sql_user']);
    $db = addslashes($_POST['sql_bdd']);

    if(!isset($_POST['sql_pass'])){
        $pass = null;
    }else {
        $pass = preg_quote($_POST['sql_pass']);
    }

    $db = 'db_' .$db. '_hubproject';

    if(file_exists(HUBPATH_TMP . '/tmp.php')){
        Fopen::removeContentFile(HUBPATH_TMP . '/tmp.php');
    }
    $dbcon = new SQL($host, $username, $pass, $db, $etape);
    Fopen::writeFile(HUBPATH_TMP . '/tmp.php', '<?php' . PHP_EOL . 'class Config{');
    Fopen::writeFile(HUBPATH_TMP . '/tmp.php', 'public static $sql_host = \'' .$host. '\';' . PHP_EOL . 'public static $sql_user = \'' .$username. '\';' . PHP_EOL . 'public static $sql_pass = \'' .$pass. '\';' . PHP_EOL . 'public static $sql_bdd = \'' .$db. '\';');

}else if(isset($_POST['site_name'], $_POST['site_color'], $_POST['site_email'], $_POST['site_pseudo'], $_POST['site_password'], $_POST['site_password_v'])) {
    if ($_POST['site_password'] != $_POST['site_password_v']) {
        $etape->setEtape(2);
        $message .= Message::errorMessage($language->getUserLanguage()["ERR_PASSWORD"]);
    } else {
        if(!isset($_POST['site_desc'])){
            $_POST['site_desc'] = null;
        }
        $etape->setEtape(3);
        $site_name = addslashes($_POST['site_name']);
        $site_desc = addslashes($_POST['site_desc']);
        $site_color = addslashes($_POST['site_color']);
        $site_email = addslashes($_POST['site_email']);
        $site_pseudo = addslashes($_POST['site_pseudo']);
        $site_password = sha1(md5(md5($_POST['site_password'])));

        Fopen::writeFile(HUBPATH_TMP . '/tmp.php', 'public static $site_name = \'' . $site_name . '\';' . PHP_EOL . 'public static $site_desc = \'' . $site_desc . '\';' . PHP_EOL . 'public static $site_color = \'' . $site_color . '\';' . PHP_EOL . 'public static $site_email = \'' . $site_email . '\';' . PHP_EOL . 'public static $site_pseudo = \'' . $site_pseudo . '\';' . PHP_EOL . 'public static $site_password = \'' . $site_password . '\';' . PHP_EOL . '}');

    }
}

if(isset($_GET['confirm'])){
    if(file_exists(HUBPATH_TMP . '/tmp.php')) {

        require_once HUBPATH_TMP . '/tmp.php';
        if(isset(\Config::$site_name, \Config::$site_desc, \Config::$site_color, \Config::$site_email, \Config::$site_pseudo, \Config::$site_password)) {
            $etape->setEtape(3);
            $dbcon = new SQL(\Config::$sql_host, \Config::$sql_user, \Config::$sql_pass, \Config::$sql_bdd, $etape);
            $statement = 'INSERT INTO `users` (email, username, password, grade) VALUES (\'' . \Config::$site_email . '\', \'' . \Config::$site_pseudo . '\', \'' . \Config::$site_password . '\', \'Owner\')';
            if($dbcon->select('SELECT * FROM `users` WHERE 1') == 0) {
                $dbcon->query($statement);
            }else {
                echo 'compte Owner deja existant';
            }
        }

        Fopen::createFile(HUBPATH_ROOT . '/configuration.php');
        Fopen::writeFile(HUBPATH_ROOT . '/configuration.php', file(HUBPATH_TMP . '/tmp.php'));
    }
    echo '<script>location.replace("/index.php");</script>';
}