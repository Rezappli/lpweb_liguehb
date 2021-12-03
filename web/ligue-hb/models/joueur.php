<?php

require_once('database.php');

function getPlayer($id)
{
  
    $joueurs = [];

    
    $pdo = initDatabse();
    if ($pdo === false)
    {
        return $joueurs;
    }

    // Query
    // -----
    try
    {
        $query = 'SELECT `id_licence` as licence,`nom`, `prenom`, `naissance`, `email`, `img` 
        FROM `joueur` 
        WHERE joueur.id_licence = :id;';
        $stmt = $pdo->prepare($query);
        $stmt->execute([':id' => $id]);
        while($row = $stmt->fetch()){
            array_push($joueurs,$row);
        }
    }
    catch(PDOException $e)
    {
        echo '[PDO error]: ' . $e->getMessage();
    }

    return $joueurs;
}

