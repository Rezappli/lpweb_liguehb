<?php

require_once('database.php');

function getAllIndex(): array
{
    $clubs = [];

    $pdo = initDatabse();
    if ($pdo === false)
    {
        return $clubs;
    }

    try
    {
        $query = 'SELECT club.id as num, ville as club, categorie.nom as categorie, COUNT(joueur.id_licence) as licencies
                FROM club 
                JOIN joueur ON joueur.id_club = club.id 
                JOIN categorie ON joueur.id_categorie = categorie.id 
                GROUP BY num, ville, joueur.id_categorie;';
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        while($row = $stmt->fetch()){
            echo $row['num'];

        }
    
    }
    catch(PDOException $e)
    {
        echo '[PDO error]: ' . $e->getMessage();
    }

    return $clubs;
}
