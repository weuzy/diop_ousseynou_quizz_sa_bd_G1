<?php 
     require_once '../db/connect_to_BD.php';
     global $db;

     $id = trim($_POST['id']);

    $sql = $db -> prepare("SELECT * FROM utilisateur WHERE profil = 'joueur' AND  id = :id");
    $sql -> bindParam(':id', $id);
    $sql -> execute();
    $result = $sql -> fetch(PDO::FETCH_ASSOC);
    echo json_encode($result);

?>