<?php

class connect{

    public function __construct()
    {
        $hostname = "localhost";
        $username = "root";
        $password = "123456";
        $dbname = 'salle-de-sport';
        $dbh =null;

        try {
            new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

}




