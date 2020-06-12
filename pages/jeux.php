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

<div class="wrapper">
    <div class="line col-4 align-items-center"></div>
    <div class="col-2-md wrapper-header" style="margin-left:28%;">relevez le challenge et testez vos connaissances</div>
    <img src="public/images/QUIZ.jpg" class="picture-form">
    <div class="score-body col-6">
        <div class="ask">
            <div class="head-in">question</div>
        </div>
    </div>
    <div class="score">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="#" id="top" class="nav-link active">
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
<script>
    $("#top").click(function(){
        $.ajax({
            type: "POST",
            url: "data/getTopscore.php",
            data: {prenom:prenom,nom:nom,score:score},
            dataType: "JSON",
            success: function(show_data){
                $(".affichage").prepend(".affichage")
            }
        })
    })
</script>
