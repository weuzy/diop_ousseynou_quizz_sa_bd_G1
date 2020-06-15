<?php 
    require_once '../db/connect_to_BD.php';
        global $db;
        $limit = $_POST['limit'];

    $sql = $db -> prepare("SELECT * FROM utilisateur WHERE profil = 'joueur' ORDER BY score DESC LIMIT $limit");
    $sql -> execute();
    $result = $sql -> fetchAll(2);
    echo json_encode($result);
    

?>
