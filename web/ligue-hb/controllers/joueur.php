<?php

require_once('models/joueur.php');

function getPlayerController($id): void
{
    if ($id != "")
    {
        echo 'Invalid player';
        die();
    }

    // Recherche du club en base de données
    // ------------------------------------
    $club = getPlayer($id);

    require_once('views/joueur.php');
}
