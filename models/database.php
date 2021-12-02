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
        $host     = 'http://dbs.lpweb-lannion.fr:4480/';
        $username = 'mathis';
        $password = 'taWnLZn5';
        $name     = 'mathis';
    
        return new PDO("mysql:host=$host;dbname=$name", $username, $password);
    }
    catch (PDOException $e)
    {
        echo '[PDO error]: ' . $e->getMessage() . '<br/>';
        
        return false;
    }
}