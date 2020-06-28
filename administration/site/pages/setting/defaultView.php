<?php defined('_HUBACCES') or header('Location: ' .DIRECTORY_SEPARATOR. 'index.php'); ?>
<?php echo '
<h2>' .\Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_H2_ACCOUNT"]. '</h2>
<p>
    ' .\Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_EMAIL"]. ' ' .\Config::$site_email. '
<form method="get" action="index.php">
    <input type="hidden" name="page" value="setting">
    <input type="hidden" name="param" value="site_email">
    <input type="submit" name="modif" value="Modification">
</form>
</p>
<p>
    ' .\Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_PSEUDO"]. ' ' .\Config::$site_pseudo. '
<form method="get" action="index.php">
    <input type="hidden" name="page" value="setting">
    <input type="hidden" name="param" value="site_pseudo">
    <input type="submit" name="modif" value="Modification">
</form>
</p>
<h2>' .\Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_H2_SITE"]. '</h2>
<p>
    ' .\Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_SITE_TITLE"]. ' ' .\Config::$site_name. '
<form method="get" action="index.php">
    <input type="hidden" name="page" value="setting">
    <input type="hidden" name="param" value="site_name">
    <input type="submit" name="modif" value="Modification">
</form>
</p>
<p>
    ' .\Administration\app\Language::getLanguage($_SESSION['language'])["PARAMETRE_SITE_DESCRIPTION"]. ' ' .\Config::$site_desc. '
<form method="get" action="index.php">
    <input type="hidden" name="page" value="setting">
    <input type="hidden" name="param" value="site_desc">
    <input type="submit" name="modif" value="Modification">
</form>
</p>';