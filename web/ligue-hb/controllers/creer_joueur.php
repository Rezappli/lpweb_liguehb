<?php
require_once('models/creer_joueur.php');

function getFormController(): void
{
    $clubs = getClubs();
    $categories = getCategories();

    require_once('views/creer_joueur.php');
}
