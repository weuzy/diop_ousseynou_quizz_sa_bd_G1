<?php 
    require_once '../db/connect_to_BD.php';
    function addUser($prenom, $nom, $profil, $login, $password, $photo){
        global $db;
        $profil = 'joueur';
      $target = array(
          'prenom'    =>   $prenom,
          'nom'       =>   $nom,
          'profil'    =>   $profil,
          'login'     =>   $login,
          'password'  =>   $password,
          'photo'  =>   $photo
          );
        $sql = "INSERT INTO utilisateur(prenom, nom, profil, login, password) VALUES(:prenom, :nom, :profil, :login, :password)";
        $req = $db -> prepare($sql);
        $result = $req -> execute($target);
        return $result;
    }
    $resultat = addUser($_POST['prenom'], $_POST['nom'], $_POST['profil'], $_POST['login'], $_POST['password'], $_FILES['photo']['name']);
    echo json_encode($resultat);
    var_dump($resultat);





?>
