<?php 
    // connexion à la base de données
    $dbHost = 'localhost';
    $dbName = 'mini_projet_quizz_sa';
    $dbUser = 'root';
    $dbUserPassword = '';
    $row_limit = 5;

    try{
        $db = new PDO('mysql:host='.$dbHost.';dbname='.$dbName,$dbUser,$dbUserPassword,
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
            )
        );
    }catch(PDOException $e){
        die('Une erreur est survenue lors de la connexion à la base de données !!');
    }


?>
