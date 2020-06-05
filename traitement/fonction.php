<?php
    require_once("../data/data_base.php");

    function displayConnexion($user){
        $login = $user['login'];
        $password = $user['password'];
        $result = connexion($login, $password);
            $result_array = $result -> fetch();
        if ($result_array !== false) {
              if ($result_array['profil'] == "admin") {
                  return "accueil";
              }
              else {
                  return "jeux";
              }
            }
        else {
            return "error";
        }
    }



?>