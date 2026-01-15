<?php

class Database
{
    protected PDO $pdo;

    public static function connect()
    {

        try {
            $pdo = new PDO('mysq:host=localhost;dbname=gestion-bibliotech', 'root', '');
                    return $pdo;
        } catch (Exception $e) {
            echo $e->getMessage();
        }


    }
}



?>