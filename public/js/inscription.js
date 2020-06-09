$("#soumettre").click(function(){
    const prenom = $("#prenom").val();
    const nom = $("#nom").val();
    const login = $("#login").val();
    const password = $("#password").val();
    const pwd = $("#pwd").val();
    if (prenom == "" || nom == "" || login == "" || password == "" || pwd == "") {
        alert("veuillez renseigner les champs!");
    }else if (password != pwd) {
        alert("les deux mots de passe doivent être identiques");
    }else{
        $.ajax({
          type: "POST",
          url: "data/registerJoueur.php",
          data: $("#form-sign").serialize(),
          //  dataType: "JSON",
           success: function(result){
             if (result) {
               $("#content").load("pages/connexion.php");
             }
            }
        })
        
    }
  
  })