<?php

require_once('database.php');

function getCommentsOfPost(int $postId): array
{
    $comments = [];

    $connection = initDatabse();
    if ($connection === false)
    {
        return $comments;
    }

    // Query
    // -----
    try
    {
        $query = 'SELECT * FROM comments WHERE post_id = :id ORDER BY created_at DESC';
        $statement = $connection->prepare($query);
        $statement->execute([':id' => $postId]);
        $comments = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e)
    {
        echo '[PDO error]: ' . $e->getMessage();
    }

    return $comments;
}
