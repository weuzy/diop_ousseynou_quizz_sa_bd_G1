<?php 
    require_once '../db/connect_to_BD.php';
   global $db;
//     /* Getting post data */
// $rowid = $_POST['rowid'];
// $rowperpage = $_POST['rowperpage'];

// /* Count total number of rows */
// $query = "SELECT count(*) as allcount FROM utilisateur";
// $result = mysqli_query($db,$query);
// $fetchresult = mysqli_fetch_array($result);
// $allcount = $fetchresult['allcount'];

// /* Selecting rows */
// $query = "SELECT * FROM utilisateur ORDER BY id ASC LIMIT ".$rowid.",".$rowperpage;

// $result = mysqli_query($db,$query);

// $utilisateur_arr = array();
// $utilisateur_arr[] = array("allcount" => $allcount);
// $profil = "joueur";
// while($row = mysqli_fetch_array($result)){
//     $id = $row['id'];
//     $prenom = $row['prenom'];
//     $nom = $row['nom'];
//     $score = $row['score'];
//     $profil = $row['profil'];

//     $utilisateur_arr[] = array("id" => $id,"prenom" => $prenom,"nom" => $nom,"score" => $score,"profil" => $profil);
// }

// /* encoding array to JSON format */
// echo json_encode($utilisateur_arr);
    if (isset($_POST["page"])) {
        $page_no = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
        if(!is_numeric($page_no))
            die("Erreur lors de la récupération des données! Numéro de page non valide !!!");
    } else {
        $page_no = 1;
    }
    // récupère la position de départ de l'enregistrement 
    $start = (($page_no-1) * $row_limit);

$results = $db->prepare("SELECT * FROM utilisateur WHERE profil='joueur' ORDER BY score DESC LIMIT $start, $row_limit");
$results->execute();

while($row = $results->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>" . 
    "<td>" . $row['id'] . "</td>" . 
    "<td>" . $row['prenom'] . "</td>" . 
    "<td>" . $row['nom'] . "</td>" . 
    "<td>" . $row['score'] . "</td>" . 
    "</tr>";
}


?>
