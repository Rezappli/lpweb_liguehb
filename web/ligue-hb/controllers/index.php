<?php
require_once('models/index.php');

function getIndexListController(): void
{
    $clubs = getAllIndex();

    require_once('views/index.php');
}
