<?php

require_once('models/club.php');

function getCommentsOfPostController(int $postId): void
{
    if ($postId <= 0)
    {
        echo 'Invalid post';
        die();
    }

    // Recherche du post en base de données
    // ------------------------------------
    $post = getPostFromId($postId);
    if (count($post) === 0)
    {
        echo 'Invalid post';
        die();
    }

    
    // Recherche des commentaires d'un post
    // ------------------------------------
    $comments = getCommentsOfPost($postId);

    require_once('views/comments.php');
}
