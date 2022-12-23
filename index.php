<?php

require_once 'baglan.php';
if(!isset($_GET['sayfa'])){
    $_GET['sayfa']="index";

}
switch ($_GET['sayfa']) {
    case 'index':
        require_once "homepage.php";
    break;

    case 'insert':
        require_once "insert.php";
    break;
    
    case 'read':
        require_once "read.php";
    break;
    
    case 'güncele':
        require_once "güncele.php";
    break;
    
    
}

?>