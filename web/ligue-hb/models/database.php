<?php

function initDatabse(): ?PDO
{
    try
    {
        $host     = 'liguehb-mysql';
        $password = 'taWnLZn5';
        $name     = 'mathis';
    
        return new PDO("mysql:host=$host;port=3306;dbname=$name", $name, $password);
    }
    catch (PDOException $e)
    {
        echo '[PDO error]: ' . $e->getMessage() . '<br/>';
        
        return false;
    }
}