<?php

require_once('models/club.php');

function getClubController($id, $categ): void
{
    if ($id <= 0 || $categ <= 0)
    {
        echo 'Invalid post';
        die();
    }

    // Recherche du club en base de données
    // ------------------------------------
    $club = getClub($id, $categ);

    require_once('views/club.php');
}
