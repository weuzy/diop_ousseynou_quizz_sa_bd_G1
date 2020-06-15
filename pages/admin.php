<?php 
             session_start();
            //  require_once('traitement/fonction.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>weuzy_QUIZZ_SA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS DU PROJET -->
    <link rel="stylesheet" href="../public/css/general.css">
  </head>

  <body>
    <div class="container-fluid" id="heading" >
      <header class="row p-0 ">
            <div class="col-2 " id="logo">
            </div>
            <div class="col-8  text-center d-flex justify-content-center align-items-center">
            <p class="titre">bienvenu au jeu de quizz</p>
            </div>
            <div class="col-2 ">
            </div>
      </header>
      <div id="content-admin" class="content">
      <div class="wrapper">
    <div class="line align-items-center"></div>
    <div class="col-8 wrapper-header">bienvenue dans la page d'accueil de l'admin</div>
    <div class="wrapper-body">
    <div class="menu">menu</div>
    <nav class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link link active" id="Lq" href="#">Liste des Questions</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link " id="CreA" href="#">Créer Admin</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link" id="Lj" href="#">Liste des Joueurs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link link" id="CreQ" href="#">Créer des Questions</a>
        </li>
    </nav>
    </div>
    <a href="#" class="nav-link deconnexion" id="deconnexion">Déconnexion</a>
</div>
      </div>
    </div>
     <!-- jQuery first,  bootpag -->
     <script src="../public/js/jquery.js"></script>
    <!-- Optional JavaScript -->
    <script>
        $(function(){ 
            var page_encours
            if (page_encours != undefined) {
                alert(page_encours)
            }else{
                page_encours = 'admin.php';
            }
            $(".nav-link").click(function(e){

        if (e.target.id == 'Lq') {
            $("#content-admin").load("question_list.php");
            // window.location.replace('question_list.php');
        }else if (e.target.id == 'CreA'){
            $("#content-admin").load("sign_admin.php");
            // window.location.replace('sign_admin.php');
        }else if (e.target.id == 'Lj') {
            page_encours = "player_lis.php"
            alert(page_encours);
            $("#content-admin").load("player_list.php");
            // window.location.replace('player_list.php');
        }else if (e.target.id == 'CreQ'){
            $("#content-admin").load("ask_question.php");
            // window.location.replace('ask_question.php');
        }else if (e.target.id == 'deconnexion') {
            $("#content-admin").load("connexion.php")
        }
    })
        })
   
</script>
  
  </body>
  
</html>

