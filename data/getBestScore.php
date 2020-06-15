<?php 
        session_start();
    require_once '../db/connect_to_BD.php';
   if (isset($_SESSION['userConnect']['id'])) {
    global $db;


    $sql = $db -> prepare("SELECT * FROM utilisateur WHERE id = :id ");
    $sql -> bindParam(':id', $_SESSION ['userConnect']['id']);
    $sql -> execute();
    $result = $sql -> fetch(2);
    echo json_encode($result);
   }
?>