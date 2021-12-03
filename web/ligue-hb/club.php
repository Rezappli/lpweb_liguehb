<?php

require_once('controllers/club.php');

if($_GET['id'] != null && $_GET['categ'] != null){
    $clubId = $_GET['id'] ?? 0;    
    $categId = $_GET['categ'] ?? 0;
    getClubController($clubId, $categId);
}else{
    echo '404 - Page Not Found';
}

?>