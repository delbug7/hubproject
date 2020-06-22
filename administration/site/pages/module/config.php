<?php defined('_HUBACCES') or header('Location: /index.php'); ?>

<?php require_once 'site/pages/module/css/config.php' ?>
<div class="main-div">
    <h1 class="page-title">Module</h1>
    <div class="page-content">
        <table>
            <thead>
            <tr>
                <th>Activer</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Version</th>
                <th>Auteur</th>
                <th>Date de création</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if ($handle = opendir('module')) {
                /* Ceci est la façon correcte de traverser un dossier. */
                while (false !== ($entry = readdir($handle))) {
                    if($entry != '.' && $entry != '..') {
                        if(file_exists(HUBPATH_ADMINISTRATION . DIRECTORY_SEPARATOR. 'module' .DIRECTORY_SEPARATOR . $entry. '/' .$entry. '.xml')){
                            $xml = simplexml_load_file(HUBPATH_ADMINISTRATION . DIRECTORY_SEPARATOR. 'module' .DIRECTORY_SEPARATOR . $entry. '/' .$entry. '.xml');
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