<?php defined('_HUBACCES') or header('Location: /index.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/installation/site/css/form.css">
        <link rel="stylesheet" type="text/css" href="/installation/site/css/style.css">
        <link rel="stylesheet" type="text/css" href="/installation/site/css/etape.css">
        <link rel="stylesheet" type="text/css" href="/installation/site/css/table.css">
        <link rel="stylesheet" type="text/css" href="/installation/site/css/message.css">
        <script src="/installation/site/js/onclick.js"></script>
    </head>
    <body>
    <?= $message ?>
        <ul id="progressbar">
            <li id="lietape" <?php if($etape->getEtape() >= 1){ echo 'class="active"';} ?>>Configuration de la base de données</li>
            <li id="lietape" <?php if($etape->getEtape() >= 2){ echo 'class="active"';} ?>>Configuration du site</li>
            <li id="lietape" <?php if($etape->getEtape() >= 3){ echo 'class="active"';} ?>>Validation des données</li>
        </ul>
        <div class="main">
            <a href="https://github.com/delbug7/Hubproject"><img src="/site/images/logo/text_logo.png" alt="Logo du site." class="text_logo"></a>

                <?php if($etape->getEtape() == 1){ echo '<form action="#" method="post">'; echo $etape->etape1($form); echo '</form>';} ?>
                <?php if($etape->getEtape() == 2){ echo '<form action="#" method="post">'; echo $etape->etape2($form); echo '</form>';} ?>

            <?php if($etape->getEtape() == 3){ echo $etape->etape3($form);} ?>
        </div>
    </body>
</html>