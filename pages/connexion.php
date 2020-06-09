

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
<script src="./public/js/connexion.js"></script>
