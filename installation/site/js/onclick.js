function submitOk() {
    $result = confirm('Êtes vous sûr ?');
    if($result){
        location.replace("/installation/index.php?confirm=Ok");
    }
}
function resetOk() {
    $result = confirm('Êtes vous sûr ?');
    if($result){
        location.replace("/installation/index.php");
    }
}