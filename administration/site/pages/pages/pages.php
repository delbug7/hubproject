<?php defined('_HUBACCES') or header('Location: /index.php'); ?>


<link rel="stylesheet" href="/administration/site/pages/pages/css/config.css">
<?php require_once 'site/pages/pages/controller.php' ?>
<div class="main-div">
    <h1 class="page-title">Pages</h1>
    <div class="page-content">
        <?php
            if(!isset($_GET['CreatePage']) && !isset($_GET['ModifPage'])){
        echo '<table>
            <thead>
            <tr>
                <th>Activer</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Modification</th>
                <th>Supprimer</th>
            </tr>
            </thead>e
            <tbody>';
            if ($handle = opendir(HUBPATH_PAGES)) {
                echo '<tr>';
                echo '<td></td>';
                echo '<td>Index - Accueil</td>';
                echo '<td>Accueil du site</td>';
                echo '<td></td>';
                echo '<td><form></form></td>';
                echo '</tr>';
                while (false !== ($entry = readdir($handle))) {
                    if($entry != '.' && $entry != '..') {
                        if($entry != 'index.php'){
                            if(file_exists(HUBPATH_PAGES . DIRECTORY_SEPARATOR. $entry. '/' .$entry. '.xml')) {
                                $xml = simplexml_load_file(HUBPATH_PAGES . DIRECTORY_SEPARATOR. $entry. '/' .$entry. '.xml');
                                echo '<tr>';
                                if($xml->active == true){
                                    $checked = 'checked';
                                }else {
                                    $checked = null;
                                }
                                echo '<td><input type="checkbox"'.$checked.'></td>';
                                echo '<td>' .ucfirst($xml->name). '</td>';
                                echo '<td>' .ucfirst($xml->description). '</td>';
                                $name = str_replace(' ', '_', $xml->name);
                                echo '<td><form method="get"><input type="hidden" name="page" value="pages"><input type="hidden" name="file" value="' .lcfirst($name). '"><input type="submit" name="ModifPage" value="modifier"></form></td>';
                                echo '<td><form method="get"><input type="hidden" name="page" value="pages"><input type="hidden" name="file" value="' .lcfirst($name). '"><input type="submit" name="Supprimer" value="supprimer" onclick="submitOk()"></form></td>';
                                echo '</tr>';
                            }
                        }
                    }
                }
                closedir($handle);
            }
            echo '</tbody>
        </table>
        <form method="get"><input type="hidden" name="page" value="pages"><label>Créer une page: </label><input type="submit" name="CreatePage" value="submit" ></form>';
        }else if(isset($_GET['CreatePage'])){
                echo '<form method="get">
                        <input type="hidden" name="page" value="pages">
                        <label>Nom de la page: </label><input type="text" name="PageName" placeholder="Nom de la page" required><br>
                        <label>Description de la page: </label><input type="text" name="PageDesc" placeholder="Description de la page" required><br>
                        <input type="submit" name="ValidPage" value="submit">
                        </form>';
            }else if(isset($_GET['ModifPage'])){
                require_once 'site/pages/pages/editor.php';
            }
            ?>
    </div>
</div>