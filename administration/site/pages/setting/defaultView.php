<?php defined('_HUBACCES') or header('Location: /index.php'); ?>
<?php echo '
<h2>Compte Super Utilisateur: </h2>
<p>
    E-mail: ' .\Config::$site_email. '
<form method="get" action="index.php">
    <input type="hidden" name="page" value="setting">
    <input type="hidden" name="param" value="site_email">
    <input type="submit" name="modif" value="Modification">
</form>
</p>
<p>
    Pseudo: ' .\Config::$site_pseudo. '
<form method="get" action="index.php">
    <input type="hidden" name="page" value="setting">
    <input type="hidden" name="param" value="site_pseudo">
    <input type="submit" name="modif" value="Modification">
</form>
</p>
<h2>Description du site:</h2>
<p>
    Nom du site: ' .\Config::$site_name. '
<form method="get" action="index.php">
    <input type="hidden" name="page" value="setting">
    <input type="hidden" name="param" value="site_name">
    <input type="submit" name="modif" value="Modification">
</form>
</p>
<p>
    Description du site: ' .\Config::$site_desc. '
<form method="get" action="index.php">
    <input type="hidden" name="page" value="setting">
    <input type="hidden" name="param" value="site_desc">
    <input type="submit" name="modif" value="Modification">
</form>
</p>';