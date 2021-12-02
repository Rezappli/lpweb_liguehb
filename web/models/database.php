<?php

/**
 * Initialisation de la connexion à la base de données
 *
 * @author Fabien Bellanger
 * @return PDO|bool
 */
function initDatabse(): ?PDO
{
    try
    {
        $host     = 'dbs.lpweb-lannion.fr';
        $username = 'mathis';
        $password = 'taWnLZn5';
        $name     = 'mathis';
    
        return new PDO("mysql:host=$host;port=3306;dbname=$name", $username, $password);
    }
    catch (PDOException $e)
    {
        echo '[PDO error]: ' . $e->getMessage() . '<br/>';
        
        return false;
    }
}