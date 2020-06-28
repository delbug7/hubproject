<?php defined('_HUBACCES') or header('Location: ' .DIRECTORY_SEPARATOR. 'index.php'); ?>

<?php require_once 'site' .DIRECTORY_SEPARATOR. 'pages' .DIRECTORY_SEPARATOR. 'module' .DIRECTORY_SEPARATOR. 'css' .DIRECTORY_SEPARATOR. 'config.php' ?>
<div class="main-div">
    <h1 class="page-title"><?= \Administration\app\Language::getLanguage($_SESSION['language'])["MODULE_TITLE"] ?></h1>
    <div class="page-content">
        <table>
            <thead>
            <tr>
                <th><?= \Administration\app\Language::getLanguage($_SESSION['language'])["MODULE_TABLE_TITLE_1"] ?></th>
                <th><?= \Administration\app\Language::getLanguage($_SESSION['language'])["MODULE_TABLE_TITLE_2"] ?></th>
                <th><?= \Administration\app\Language::getLanguage($_SESSION['language'])["MODULE_TABLE_TITLE_3"] ?></th>
                <th><?= \Administration\app\Language::getLanguage($_SESSION['language'])["MODULE_TABLE_TITLE_4"] ?></th>
                <th><?= \Administration\app\Language::getLanguage($_SESSION['language'])["MODULE_TABLE_TITLE_5"] ?></th>
                <th><?= \Administration\app\Language::getLanguage($_SESSION['language'])["MODULE_TABLE_TITLE_6"] ?></th>
            </tr>
            </thead>
            <tbody>
            <?php
            if ($handle = opendir('module')) {
                /* Ceci est la façon correcte de traverser un dossier. */
                while (false !== ($entry = readdir($handle))) {
                    if($entry != '.' && $entry != '..') {
                        if(file_exists(HUBPATH_ADMINISTRATION . DIRECTORY_SEPARATOR. 'module' .DIRECTORY_SEPARATOR . $entry. DIRECTORY_SEPARATOR .$entry. '.xml')){
                            $xml = simplexml_load_file(HUBPATH_ADMINISTRATION . DIRECTORY_SEPARATOR. 'module' .DIRECTORY_SEPARATOR . $entry. DIRECTORY_SEPARATOR .$entry. '.xml');
                            echo '<tr>';
                            echo '<td><input type="checkbox"></td>';
                            echo '<td>' .$xml->name. '</td>';
                            echo '<td>' .$xml->description. '</td>';
                            echo '<td>' .$xml->version. '</td>';
                            echo '<td>' .$xml->author. '</td>';
                            echo '<td>' .$xml->creationDate. '</td>';
                            echo '</tr>';
                        }
                    }
                }

                closedir($handle);
            }
            ?>
            </tbody>
        </table>
    </div>
</div>