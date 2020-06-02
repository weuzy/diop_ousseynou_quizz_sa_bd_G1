<?php
require_once('traitement/fonction.php');
if(isset($_POST['submit'])){     
    $message = connexion($_POST['login'],$_POST['password'],'');
}
?>


<div id="form" class="container-fluid d-flex">
    <form method="post" class="col-md-4 m-auto" id="form">
        <div class="title"> Form Login</div>
        <?php
            if (isset($message)) {
                echo '<label class="text-danger">'.$message.'</label>';
            }
        ?>
        <div class="form-group">
            <label for="login"></label>
            <input type="text" name="login" id="login" class="form-control" placeholder="login" aria-describedby="error-1">
            <div class="glyphicon glyphicon-user"></div>
            <small id="error-1" class="error-form text-danger"></small>
        </div>
        <div class="form-group">
            <label for="password"></label>
            <input type="password" name="password" id="password" class="form-control" placeholder="password" aria-describedby="error-2">
            <small id="error-2" class="error-form text-danger"></small>
        </div>
        <button type="submit" name="submit" class="btn-form">connexion</button>
        <a href="index.php?lien=inscription" class="link-form">sign up to play ?</a>
    </form>
</div>

<script src="./public/js/connexion.js"></script>