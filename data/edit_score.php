<?php 
    require_once '../db/connect_to_BD.php';
    global $db;

    $id      =  trim($_POST['id']);
    $prenom  =  trim($_POST['prenom']);
    $nom     =  trim($_POST['nom']);
    $score   =  trim($_POST['score']);

    $sql = $db -> prepare("UPDATE utilisateur SET prenom = :prenom, nom = :nom, score =:score WHERE id = :id");
    $sql -> bindParam(':id', $id);
    $sql -> bindParam(':prenom', $prenom);
    $sql -> bindParam(':nom', $nom);
    $sql -> bindParam(':score', $score);
    // insertion d'une ligne
    if($sql -> execute()) :
        $result = 1;
    endif;
    echo $result;
    $db = null;


?>