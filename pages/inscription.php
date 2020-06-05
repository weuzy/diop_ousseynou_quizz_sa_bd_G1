<div class="sign row">
    <form id="form md-col-4 m-auto">
        <div class="sign-header">s'inscrire</div>
        <div class="form-group">
          <label class="register" for="prenom">Prénom</label>
          <input type="text" name="prenom" id="prenom" class="form-control" aria-describedby="error1">
          <small id="error1" class="error-form text-danger"></small>
        </div>
        <div class="form-group">
          <label class="register" for="nom">Nom</label>
          <input type="text" name="nom" id="nom" class="form-control" aria-describedby="error2">
          <small id="error2" class="error-form text-danger"></small>
        </div>
        <div class="form-group">
          <label class="register" for="login">Login</label>
          <input type="text" name="login" id="login" class="form-control" aria-describedby="error3">
          <small id="error3" class="error-form text-danger"></small>
        </div>
        <div class="form-group">
          <label class="register" for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control" aria-describedby="error4">
          <small id="error4" class="error-form text-danger"></small>
        </div>
        <div class="form-group">
          <label class="register" for="pwd">Confirmed Password</label>
          <input type="password" name="pwd" id="pwd" class="form-control" aria-describedby="error5">
          <small id="error5" class="error-form text-danger"></small>
        </div>
    </form>
    <div>
        <label class="file-load">
            <input name="avatar" type="file" id="avatar">
            <i></i>choisir un fichier
        </label>
    </div>
    <div class="user">
        <img src="" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
        <div class="user-avatar">Avatar du Joueur</div>
    </div>
    <button type="submit" class="btn-soumet">soumettre</button>

</div>