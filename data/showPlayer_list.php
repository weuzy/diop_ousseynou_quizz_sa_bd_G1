<?php 
    require_once '../db/connect_to_BD.php';
    global $db;
    /* Getting post data */
$rowid = $_POST['rowid'];
$rowperpage = $_POST['rowperpage'];

/* Count total number of rows */
$query = "SELECT count(*) as allcount FROM utilisateur";
$result = mysqli_query($db,$query);
$fetchresult = mysqli_fetch_array($result);
$allcount = $fetchresult['allcount'];

/* Selecting rows */
$query = "SELECT * FROM utilisateur ORDER BY score ASC LIMIT ".$rowid.",".$rowperpage;

$result = mysqli_query($db,$query);

$utilisateur_arr = array();
$utilisateur_arr[] = array("allcount" => $allcount);
$profil = "joueur";
while($row = mysqli_fetch_array($result)){
    $score = $row['score'];
    $prenom = $row['prenom'];
    $nom = $row['nom'];
    $profil = $row['profil'];

    $utilisateur_arr[] = array("score" => $score,"prenom" => $prenom,"nom" => $nom);
}

/* encoding array to JSON format */
echo json_encode($utilisateur_arr);




?>