<?php 
    require_once '../db/connect_to_BD.php';
   
    function getTopscore($prenom, $nom, $score){
        global $db;
        $target = array(
            'prenom' => $prenom,
            'nom' => $nom,
            'score' => $score
        );
        $sql = "SELECT * FROM utilisateur WHERE profil = 'joueur' AND prenom = :prenom AND nom = :nom AND score = :score ORDER BY score DESC LIMIT 5 ";
        $req = $db -> prepare($sql);
        $req -> execute($target);
        $result = $req -> fetch();
        return $result;
    }
    $resultat = getTopscore($_POST['prenom'], $_POST['nom'], $_POST['score']);
    echo json_encode($resultat);

?>