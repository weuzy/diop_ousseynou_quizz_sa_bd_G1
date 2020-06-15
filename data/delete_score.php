<?php 
    require_once '../db/connect_to_BD.php';
    global $db;
    
    $result = 0;
    echo $score = intval($_POST['scoreUsing']);

    if(intval($score)) :
        $sql = $db -> prepare("DELETE FROM utilisateur WHERE score = :score");
        $sql -> bindParam(':score', $score, PDO::PARAM_INT);
        if($sql -> execute()){
            $result = 1;
        }
    endif;
    echo $result;
    $db = null;
  
?>