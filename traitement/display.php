<?php
require_once('fonction.php');
$utilisateur = [
    'login' => $_POST['login'], 
    'password' => $_POST['password']
];
$result = displayConnexion($utilisateur);
if ($result != 'error') {
    // *accueil* est le lien de la page Admin
     // *jeux* est le lien de la page où l'utilisateur va jouer 
     // *inscription* est le lien de la page où l'utilisateur va s'inscrire pour jouer
     switch ($result) {
       case 'accueil':
         require_once('../pages/admin.php');
         break;
       case 'jeux':
         require_once('../pages/jeux.php');
         break;
     }
  }
  elseif (($_GET['lien'] == 'inscription')) {
      require_once('../pages/inscription.php');
  }
  else {
    echo 'error';
  }
?>