
    $("#connect").click(function(){
        const login = $("#login1").val();
        const password = $("#password1").val();
        if (login == "" || password == "") {
           $(".error").html('ce champ est obligatoire');
        }else{  
            $.ajax({
                type: "POST",
                url: "data/getConnexion.php",
                data: $('#form-connexion').serialize(),
                dataType: "JSON",
                success: function(result){
                    if(result == 'false'){
                        alert(result);
                    }else{
                        if (result['profil'] == "admin") {
                            $('#content').load('pages/admin.php');
                        }else if(result['profil'] == "joueur"){
                            $('#content').load('pages/jeux.php');
                        }else{
							$(".erreur").html('login ou mot de passe incorect!!');
						}
                        // 
                    }
                }
                
            });
        }
    });
     $("#inscription").click(function(){
         $('#content').load('pages/inscription.php');
     })
       


