
<?php 

// require_once '../data/getConnexion.php';

//   if (isset($_GET['lien'])) {
//     if ($_GET['lien'] == 'connexion') {
//       getConnexion($_POST['login'],$_POST['password']);
//     }
//     elseif ($_GET['lien'] == 'inscription') {
//       require_once './pages/inscription.php';
//     }
//     elseif ($_GET['lien'] == 'admin') {
//         if (is_connect()) {
//           require_once './pages/admin.php';
//         }
//     }
//     elseif ($_GET['lien'] == 'joueur') {
//         if (is_connect()) {
//           require_once './pages/jeux.php';
//         }
//     }
//     elseif($_GET['lien'] == 'deconnexion'){
//         is_deconnect();
//     }
//   }
//   else {
//     require_once './pages/connexion.php';
//   }
           
?>
<div class="container-fluid d-flex">
    <form id="form-connexion" method="post" class="col-md-4 m-auto" id="form">
        <div class="title"> Form Login</div>
        <div class="form-group">
            <label for="login"></label>
            <input type="text" name="login" id="login1" class="form-control" placeholder="login" aria-describedby="error">
            <small class="error-form error alert-danger text-danger"></small>
        </div>
        <div class="form-group">
            <label for="password"></label>
            <input type="password" name="password" id="password1" class="form-control" placeholder="password" aria-describedby="error">
            <small class="error-form error alert-danger text-danger"></small>
        </div>
        <button  type="button" id="connect" name="submit" class="btn-form">connexion</button>
        <small class="erreur alert text-danger"></small>

        <a href="#" class="link-form" id="inscription">sign up to play ?</a>
    </form>
</div>
<script>
    
    $("#connect").click(function(e){
        alert('ok')
        e.preventDefault();
        const login = $("#login1").val();
        const password = $("#password1").val();
        if (login == "" || password == "") {
           $(".error").html('ce champ est obligatoire');
        }else{  
            $.ajax({
                type: "POST",
                url: "http://localhost/Diop_Ousseynou_Quizz_BD/data/getConnexion.php",
                data: $('#form-connexion').serialize(),
                dataType: "JSON",
                success: function(result){
                    if(result == 'false'){
                        alert(result);
                    }else{
                       
                        if (result['profil'] == "admin")
                        {
                         // $('#content').load('pages/admin.php');
                        window.location.replace('pages/admin.php')
                        }
                        else if(result['profil'] == "joueur")
                        {
                        // $('#content').load('pages/jeux.php');
                        window.location.replace('pages/jeux.php');
                        }
                       else{
							$(".erreur").html('login ou mot de passe incorect!!');
						}
                        // 
                    }
                }
                
            });
        }
    });
     $("#inscription").click(function(){
        //  $('#content').load('pages/inscription.php');
        window.location.replace('pages/inscription.php');
     })
       



</script>
