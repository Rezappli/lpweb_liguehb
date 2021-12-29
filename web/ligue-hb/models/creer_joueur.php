<?php

require_once('database.php');

function getClubs(): array
{
    $clubs = [];

    $pdo = initDatabse();
    if ($pdo === false)
    {
        return $clubs;
    }

    try
    {
        $query = 'SELECT club.id as num, ville as club
                FROM club;';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        while($row = $stmt->fetch()){
            array_push($clubs,$row);
        }
    
    }
    catch(PDOException $e)
    {
        echo '[PDO error]: ' . $e->getMessage();
    }

    return $clubs;
}

function getCategories(): array
{
    $categories = [];

    $pdo = initDatabse();
    if ($pdo === false)
    {
        return $categories;
    }

    try
    {
        $query = 'SELECT categorie.id as idCateg, categorie.nom as categorie 
                FROM categorie;';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        while($row = $stmt->fetch()){
            array_push($categories,$row);
        }
    }
    catch(PDOException $e)
    {
        echo '[PDO error]: ' . $e->getMessage();
    }

    return $categories;
}
