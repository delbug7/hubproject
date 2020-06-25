<?php defined('_HUBACCES') or header('Location: /index.php'); ?>
<div class="main-div">
    <h1 class="page-title">Paramètre</h1>
    <div class="page-content">
<?php
if(isset($_GET['modif'])){
    if($_GET['modif'] = 'Modification'){
        require_once HUBPATH_SITEDIR . DIRECTORY_SEPARATOR. 'pages' .DIRECTORY_SEPARATOR. 'setting' .DIRECTORY_SEPARATOR. 'controller.php';
    }
}else{
    require_once HUBPATH_SITEDIR . DIRECTORY_SEPARATOR. 'pages' .DIRECTORY_SEPARATOR. 'setting' .DIRECTORY_SEPARATOR. 'defaultView.php';
}
?>
    </div>
</div>