<?php

require_once('database.php');

function getClub(int $id, int $categ): array
{
  
    $club = [];

    $pdo = initDatabse();
    if ($pdo === false)
    {
        return $club;
    }

    // Query
    // -----
    try
    {
        $query = 'SELECT club.ville as ville,categorie.id as idCateg, categorie.nom as categ, id_licence as idJoueur, joueur.nom as nomJoueur, joueur.prenom as prenomJoueur 
        FROM `joueur` 
        JOIN categorie ON joueur.id_categorie = categorie.id 
        JOIN club ON club.id = joueur.id_club
         WHERE id_categorie = :id_categ AND club.id = :id_club;';
        $stmt = $pdo->prepare($query);
        $stmt->execute([':id_categ' => $categ,':id_club' => $id,]);
        while($row = $stmt->fetch()){
            array_push($club,$row);
        }
    }
    catch(PDOException $e)
    {
        echo '[PDO error]: ' . $e->getMessage();
    }

    return $club;
}

