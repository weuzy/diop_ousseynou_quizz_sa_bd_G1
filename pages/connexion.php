<?php
$message_error ="";
if (isset($_POST['submit'])) {
    $login = $_POST['login'];
    $passsword = $_POST['password'];
    $result = connexion($login, $passsword);
    if($result == 'accueil'){
        $_SESSION['admin'] = true;
        header("location:index.php?lien=$result");
    }elseif($result == 'jeux'){
        $_SESSION['joueur'] = true;
        header("location:index.php?lien=$result");
    }else{
        $message_error = "Login ou Mot de Passe Incorrect !!";
    }
}
?>


<div class="container-fluid d-flex">
    <form id="form-connexion" method="post" class="col-md-4 m-auto" id="form">
        <div class="title"> Form Login</div>
        <?php
            if (isset($message_error)) {
                echo '<label class="text-danger">'.$message_error.'</label>';
            }
        ?>
        <div class="form-group">
            <label for="login"></label>
            <input type="text" name="login" id="login1" class="form-control" placeholder="login" aria-describedby="error-1">
            <div class="glyphicon glyphicon-user"></div>
            <small id="error-1" class="error-form text-danger"></small>
        </div>
        <div class="form-group">
            <label for="password"></label>
            <input type="password" name="password" id="password1" class="form-control" placeholder="password" aria-describedby="error-2">
            <small id="error-2" class="error-form text-danger"></small>
        </div>
        <button onclick="sendData('accueil',true)" type="button" id="connect" name="submit" class="btn-form">connexion</button>
        <button type="button" id="inscription" class="inscription">sign to play ?</button>
    </form>
</div>

