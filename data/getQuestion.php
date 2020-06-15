<?php 
      require_once '../db/connect_to_BD.php';
      global $db;

    $limit = $_POST['limit'];
    $offset = $_POST['offset'];
    $id_question = $_POST['id_question'];

    $sql = $db -> prepare("SELECT * FROM question ORDER BY id_question LIMIT $offset,$limit");
    $sql -> execute();
    $result = $sql -> fetch(2);
    echo json_encode($result);


?>