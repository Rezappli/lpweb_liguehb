<?php

require_once('database.php');

function getPlayer($id)
{
  
    $joueur = [];
    $club = [];
    
    $pdo = initDatabse();
    if ($pdo === false)
    {
        return $joueur;
    }

    // Query
    // -----
    try
    {

        $query = 'SELECT `id_licence` as licence, joueur.`nom`, `prenom`, `naissance`, `email`, `img`, categorie.nom as nomCategorie, club.ville as ville 
        FROM `joueur` JOIN club ON club.id = joueur.id_club JOIN categorie ON joueur.id_categorie = categorie.id
        WHERE joueur.id_licence = :id LIMIT 1;';
        $stmt = $pdo->prepare($query);
        $stmt->execute([':id' => $id]);
        while($row = $stmt->fetch()){
            $joueur = $row;
        }
    }
    catch(PDOException $e)
    {
        echo '[PDO error]: ' . $e->getMessage();
    }

    return $joueur;
}

