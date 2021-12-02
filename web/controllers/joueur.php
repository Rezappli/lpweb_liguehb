<?php

require_once('models/joueur.php');

function getPostsListController(): void
{
    $posts = getAllPosts();

    require_once('views/posts.php');
}
