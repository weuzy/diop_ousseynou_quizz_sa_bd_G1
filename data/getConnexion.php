<?php
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
        $result=$req->fetch();
        return $result;
   }
   $resultat = getConnexion($_POST['login'],$_POST['password']);
   echo json_encode($resultat)

?>