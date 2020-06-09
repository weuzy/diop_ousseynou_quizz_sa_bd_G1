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
<script>
    $(".nav-link").click(function(e){
        if (e.target.id == 'Lq') {
            $("#content").load("pages/question_list.php");
        }else if (e.target.id == 'CreA'){
            $("#content").load("pages/sign_admin.php");
        }else if (e.target.id == 'Lj') {
            $("#content").load("pages/player_list.php");
        }else if (e.target.id == 'CreQ'){
            $("#content").load("pages/ask_question.php");
        }else if (e.target.id == 'deconnexion') {
            $("#content").load("pages/connexion.php")
        }
    })
</script>
