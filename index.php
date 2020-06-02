<!doctype html>
<html lang="en">
  <head>
    <title>weuzy_QUIZZ_SA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS DU PROJET -->
    <link rel="stylesheet" href="./public/css/general.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      <div class="content">
        <?php
        //   session_start();
        //   require_once("./traitement/fonction.php");
        //   if (isset($_GET['statut']) && $_GET['statut']==="logout") {
        //     deconnexion();
        // }
        // require_once("./pages/connexion.php");  
        require_once("./pages/admin.php")        
        ?>
      </div>
    </div>
   
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>