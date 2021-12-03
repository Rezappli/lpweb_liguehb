<?php

require_once('controllers/joueur.php');

if($_GET['id'] != null){
    $id = $_GET['id'] ?? '';    
    getPlayerController($id);
}else{
    echo '404 - Page Not Found';
}

?>