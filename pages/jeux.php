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
  <style>
.score-body{
    margin-left: 25%;
    margin-top: 0rem;
    padding: 8%;
    background: linear-gradient(180deg, #F6DAC4 0%, rgba(246, 218, 196, 0) 100%);
    /* mix-blend-mode: lighten; */
    border-radius: 30px;
    width: 50%;
}
.score{
    position: absolute;
    width: 23%;
    margin-left: 75%;
    height: 19rem;
    margin-top: -8rem;
    background: linear-gradient(180deg, #F5D9C3 0%, var(--white) 100%);
    mix-blend-mode: hard-light;
    border-radius: 25px;
    box-shadow: inset 0px 4px 4px rgba(0, 0, 0, 0.25);
}
#deconnexion{
    margin-top: 14rem;
}
.picture-form{
    background-color: rgba(113, 251, 110, 0.63);
    margin-left: 5%;
    margin-top: 2rem;
    float: left;
    height: 120px;
    width: 120px;
    border: 1px solid rgb(105, 104, 104);
    border-radius: 50%;
}

</style>

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
      <div id="content" class="content">
       
<div class="wrapper">
    <div class="line col-4 align-items-center"></div>
    <div class="col-2-md wrapper-header" style="margin-left:28%;">relevez le challenge et testez vos connaissances</div>
    <img src="" class="picture-form">
    <div class="score-body col-6">
        <div class="ask">
            <div class="head-in">question</div>
        </div>
    </div>
    <div class="score">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#" id="top" class="nav-link">
                    <h5>Top Score</h5>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" id="best" class="nav-link">
                    <h5>Mon Meilleur Score</h5>
                </a>
            </li>
        </ul>
        <div class="affichage"></div>
    </div>
    <a href="#" class="nav-link deconnexion" id="deconnexion">Déconnexion</a>
</div>
      </div>
    </div>
    <!-- jQuery first,   -->
    <script src="../public/js/jquery.js"></script>
    <!-- Optional JavaScript -->
    <script>
    $(function(){
        const display = $(".affichage");
                // affichage top 5 meilleurs scores
       $("#top").on('click', function(){
        $.ajax({
            type: "POST",
            url: "http://localhost/Diop_Ousseynou_Quizz_BD/data/getTopScore.php",
            data: {limit:5,type:'ajax'},
            dataType: "JSON",
            success: function(data){
                display.html("");
                printData(data,display);
            }
        })
            // $("#top").off('click');
       });

                // affichage mon meilleur score
        $("#best").on('click', function(){
            $.ajax({
                type: "GET",
                url: "http://localhost/Diop_Ousseynou_Quizz_BD/data/getBestScore.php",
                dataType: "JSON",
                success: function(data){
                   display.html(`<h5 class="mt-10" style="text-align:center;font-family:Buda;margin-top:3rem">${data.id}&nbsp;&nbsp;${data.prenom}&nbsp;&nbsp;${data.nom}&nbsp;&nbsp;${data.score}&nbsp;&nbsp;pts</h5>`) 

                }
            })


        });

       function printData(data,display){
           $.each(data,function(indice,user){
              display.append(`
              <h5 style="text-align:center;font-family:Buda;">${user.id}&nbsp;&nbsp;${user.prenom}&nbsp;&nbsp;${user.nom}&nbsp;&nbsp;${user.score}&nbsp;&nbsp;pts</h5>
              `) 
           });
       }
       $("#deconnexion").on('click', function(){
           $("#content").load('pages/connexion.php');
       })
    })
</script>
  </body>
  
</html>
