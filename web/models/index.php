<?php

require_once('database.php');

/**
 * Récupération de tous les commentaires d'un post
 *
 * @author Fabien Bellanger
 * @param int $postId   ID du post
 * @return array
 */
function getAllIndex(): array
{
    $clubs = [];

    $pdo = initDatabse();
    if ($pdo === false)
    {
        return $clubs;
    }

    // Query
    // -----
    try
    {
        $sql = 'SELECT * FROM club';
        $stmt = $pdo->query($sql);
        while ($club = $stmt->fetch()) {
            array_push($clubs, $club);
        }
    }
    catch(PDOException $e)
    {
        echo '[PDO error]: ' . $e->getMessage();
    }

    return $clubs;
}
