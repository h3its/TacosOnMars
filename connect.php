<?php

function ConnectDB() {
        $type = 'mysql';
        $hostname = 'localhost';
        $username = 'admin';
        $password = 'admin';
        $dbname = 'Tacos';
        $charset = 'utf8mb4';
        try {
                $dbh = new PDO("mysql:host=$hostname;dbname=$dbname;",
                                $username, $password);
        }
        catch(PDOException $e){
                die ('PDO error in "ConnectDB(): ' . $e->getMessage() );
        }

        return $dbh;
}

?>