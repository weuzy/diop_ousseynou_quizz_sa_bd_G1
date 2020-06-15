<?php
             session_start();

    require_once '../db/connect_to_BD.php';
   function getConnexion($login, $password){
        global $db;

        $target = array(
            'login'  =>  $login,
            'password'  =>  $password  
            );
        $sql = "SELECT * FROM utilisateur WHERE login = :login AND password = :password";
        $req = $db -> prepare($sql);
        $req -> execute($target);
        $result=$req->fetch(2);
        return $result;
   }
   $resultat = getConnexion($_POST['login'],$_POST['password']);
   if ( count($resultat) > 1) {
       $_SESSION['userConnect'] = $resultat;
   }
   echo json_encode($resultat);
   function is_deconnect(){
        session_destroy();
        unset($_SESSION['userConnect']);
        echo 'deconnexion réussie en success';
   }
   function is_connect(){
       if (isset($_SESSION['userConnect'])) {
            return true;
       }else{
           return false;
       }

   }















?>
