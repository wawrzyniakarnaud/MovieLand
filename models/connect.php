<?php 

    $serverName = 'localhost';
    $userName = 'xtorz';
    $password = 'mathy';
    $dbname = 'movies';

    try {
        // connect
        $connect = new PDO("mysql:host=".$serverName.";dbname=".$dbname ,$userName , $password);
        
        //gestion d'erreur  
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "erreur de connexion ".$e->getMessage();
    }
        
    $connect->query("SET NAMES UTF8"); //Solution encodage UTF8

?>