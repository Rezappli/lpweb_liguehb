<?php

require_once('controllers/club.php');
require_once('controllers/joueur.php');
require_once('controllers/index.php');

$action = $_GET['page'] ?? 'index';

// Routing
// -------
switch ($action) {
    case 'index':
        getIndexListController();
        break;
    // case 'joueur':
    //     $joueurId = $_GET['joueur_id'] ?? 0;
    //     getJoueur($joueurId);
    //     break;
    // case 'club':
    //     $clubId = $_GET['club_id'] ?? 0;
    //     getClub($clubId);
    //     break;
    default:
        echo '404 - Page Not Found';
}
