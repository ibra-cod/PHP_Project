<?php

namespace App\Fram;
use PDO;

class PDOFactory
{
    public static function getPDO(): \PDO
    {
        return new \PDO('mysql:host=db;dbname=cms','root', 'password',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);
        
    }


   
}