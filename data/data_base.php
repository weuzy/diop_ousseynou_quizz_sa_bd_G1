<?php 
    function dataConnexion(){
        $connect = "";
        try {
            // on se connecte à mysql
            $connect = new PDO("mysql:host=localhost;dbname=mini_projet_quizz_sa;charset=utf8","root","");
            $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $connect;
        } catch (PDOException $e) {
            // En cas d'erreur on affiche un message et on arrête tout
           die('Erreur: veuillez revoir vos données');
        }
    }
    
    function connexion($login, $password){
        $recupere = dataConnexion();

        // 
        $data = 'SELECT * FROM utilisateur WHERE login = :login AND password = :password';

        // 
        $query = $recupere -> prepare($data);

        // 
        $query -> execute(
            array(
                'login' => $login,
                'password' => $password
            )
        );
        return $query;
    }




?>