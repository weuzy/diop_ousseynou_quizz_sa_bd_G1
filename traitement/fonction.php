<?php
function connexion($login,$pwd,$profil){
    $message = "";
    $connect = new PDO("mysql:host=localhost;dbname=mini_projet_quizz_sa;charset=utf8","root","");
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (empty($login) || empty($pwd)) {
        $message = '<label > Tous les champs sont obligatoire</label>';
        return $message;
    }
    else {
        $query = "SELECT * FROM utilisateur WHERE login = :login AND password = :password AND profil = :profil";
        $statement = $connect->prepare($query);
        $statement->execute(
            array(
                'login'  =>  $login, 
                'password'  =>  $pwd,
                'profil'  =>  $profil
            )
        );
        $count = $statement->rowCount();
        if ($count > 0) {
            // A REVOIR
            $_SESSION["login"] = $login;
            $_SESSION["password"] = $pwd;
            if ($_SESSION["profil"]==="admin") {
                return "accueil";
            }else {
                return "jeux";
            }
            header("location:pages/admin.php"); 
        }
        else {
            $message = '<label>Login ou Password incorrect</label>';
            return $message;
        }
    }
}
function is_connect(){


    if (!isset($_SESSION['admin']) && !isset($_SESSION['joueur'])) {
        header("location:index.php");
    }
}
function deconnexion(){
    session_destroy();
}
?>