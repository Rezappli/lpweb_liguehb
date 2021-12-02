<?php
require_once('models/index.php');

/**
 * Liste des posts
 *
 * @author Fabien Bellanger
 * @return void
 */
function getIndexListController(): void
{
    $clubs = getAllIndex();

    require_once('views/index.php');
}
