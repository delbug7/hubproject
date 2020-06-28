<?php defined('_HUBACCES') or header('Location: ' .DIRECTORY_SEPARATOR. 'index.php'); ?>
<div class="main-div">
    <h1 class="page-title"><?= \Administration\app\Language::getLanguage($_SESSION['language'])["DASHBOARD_TITLE"] ?></h1>
    <div class="page-content"><pre><?= var_dump($_SERVER) ?></pre></div>
</div>