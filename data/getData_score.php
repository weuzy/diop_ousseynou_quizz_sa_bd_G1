<?php 
    require_once '../db/connect_to_BD.php';
    global $db;

    $limit = $_POST['limit'];
    $offset = $_POST['offset'];
    
    $sql = $db -> prepare("SELECT * FROM utilisateur WHERE profil='joueur' ORDER BY score DESC LIMIT $offset,$limit");
    $sql -> execute();
    $result = $sql -> fetchAll(2);
    echo json_encode($result);


?>