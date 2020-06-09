<?php
    function connexion($user){
        $login = $user['login'];
        $password = $user['password'];
        $result_array = getConnexion($login, $password);
        if ($result_array != false) {
            if ($result_array['profil'] == "admin") {
               return 'accueil';
            }else{
               return 'jeux ';
            }
        }else{
            return "error";
        }

    }

?>