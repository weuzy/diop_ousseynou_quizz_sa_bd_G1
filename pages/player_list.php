
<style>
  .success, .error{
  border: 1px solid;
  margin: 10px 0px;
  padding:15px 10px 15px 50px;
}

.success {
  color: #4F8A10;
  background-color: #DFF2BF;
  display: none;
}
.error {
  display: none;
  color: #D8000C;
  background-color: #FFBABA;
}
#scrollZone{
  height: 400px;
  overflow: scroll;
}
.add{
    margin-top: 30rem;
    position: absolute;
    text-align: center;
    margin-left: 12%;
    font-family: buda;
}
input{
    padding: 5px;
    border: none;
    background-color: white;
    border-radius: 7px;
}

</style>


<div class="wrapper">
<div class="line col-4 align-items-center"></div>
<div class="col-2-md wrapper-header" style="margin-left:38%">liste des joueurs par score</div>
<div class="list-body">
    <form>
      <table class="table">
        <tr>
          <td colspan="4" class="add">
            <input type="hidden" id="user_id" value="">
            <input type="text" placeholder="prenom" required id="user_prenom">&nbsp;&nbsp;
            <input type="text" placeholder="nom" required id="user_nom">&nbsp;&nbsp;
            <input type="text" placeholder="score" required id="user_score">&nbsp;&nbsp;
            <input type="button" id="save" style="background-color:teal;color:white;" value="Add Player">
          </td>
        </tr>
        <small class="error"></small>
        <small class="success"></small>
      </table>
    </form>
    <div id="scrollZone" class="col">
    <table class="table show table-hover">
    <thead>
            <tr>
                <th>#</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>score</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody class="show_display">
        
        </tbody>
    </table>
</div>
</div>
  <a href="#" class="back_to_menu" style="margin-left: 3%;">retour vers le menu</a>
</div>
<script>
// 
      
               // scroll zone
      $(document).ready(function(){
         let offset = 0;
          const tbody = $('.show_display')
         $.ajax({
                type: "POST",
                url: "http://localhost/Diop_Ousseynou_Quizz_BD/data/getData_score.php",
                data: {limit:5,offset:offset,type:'ajax'},
                dataType: "JSON",
                success: function (data) {
                  tbody.html('')
                    printData(data,tbody);
                    offset +=5;
                }
            });
             // récupèration du bouton d'enregistrement
        $("#save").on('click', function(){
          alert('ok');
          var user_id = $('#user_id').val();
          var user_prenom = $('#user_prenom').val();
          var user_nom = $('#user_nom').val();
          var user_score = $('#user_score').val();
          if (!user_id || !user_prenom || !user_nom) {
            $('.error').show(3000).html("tous les champs sont obligatoire.").delay(3200).fadeOut(3000);
          }
          else{
            if (user_id) {
              var url = 'http://localhost/Diop_Ousseynou_Quizz_BD/data/edit_score.php';
            }
            $.post(url, {id:user_id, prenom:user_prenom, nom:user_nom, score:user_score})
            .done(function(data){
              alert('ok');
              if (data > 0) {
                $('.success').show(3000).html("Enregistrement enregistré avec succès").delay(2000).fadeOut(1000);
                offset -=  5;
                $.ajax({
                type: "POST",
                url: "http://localhost/Diop_Ousseynou_Quizz_BD/data/getData_score.php",
                data: {limit:5,offset:offset,type:'ajax'},
                dataType: "JSON",
                success: function (data) {
                  console.log(data);
                  tbody.html('')
                    printData(data,tbody);
                    offset +=5;
                }
            });
              }
              else{
                $('.error').show(3000).html("L'enregistrement n'a pas pu être sauvegardé. Veuillez réessayer svp.").delay(2000).fadeOut(1000);
              }
              $("#save").val("Add Player");
              setTimeout(function(){
                window.location.reload(1);
              }, 5000);
            });
          }
        });
         const scrollZone = $("#scrollZone")
          scrollZone.scroll(function(){
            const st = scrollZone[0].scrollTop;
        const sh = scrollZone[0].scrollHeight;
        const ch = scrollZone[0].clientHeight;
        console.log(st,sh, ch);
        
        if(sh-st <= ch){
            $.ajax({
                type: "POST",
                url: "http://localhost/Diop_Ousseynou_Quizz_BD/data/getData_score.php",
                data: {limit:5,offset:offset,type:'ajax'},
                dataType: "JSON",
                success: function (data) {
                    printData(data,tbody);
                 
                    offset +=5;
                }
            });
        }   
          });
          function printData(data,tbody){
            $.each(data, function(indice,user){
            tbody.append(`
            <tr class="text-center">
                <td>${user.id}</td>
                <td>${user.prenom}</td>
                <td>${user.nom}</td>
                <td>${user.score}</td>
                <td><a data-scoreusing ="${user.score}" data-iduser="${user.id}" class="editbtn" href="javascript:void(0)">modifier</a>&nbsp;|&nbsp;<a data-scoreUsing ="${user.score}"  class="delbtn" href="javascript:void(0)">supprimer</a></td>
            </tr>
        `);
      });
        //  récupèration du bouton de suppression
        $(".delbtn").on('click', function(){
             if(confirm('Cette action supprimera cet enregistrement. Êtes-vous sûr?')){
               var scoreUsing = $(this).data('scoreUsing');
               $.post("http://localhost/Diop_Ousseynou_Quizz_BD/data/delete_score.php", {scoreUsing: scoreUsing})
               .done(function(data){
                 if (data > 0) {
                   $('.success').show(3000).html("Donnée supprimée avec succés.").delay(3200).fadeOut(6000);
                 }else{
                   $('.error').show(3000).html("Donnée n'a pas pu être supprimer; veuillez ressayer svp.").delay(3200).fadeOut(6000);
                 }
                 setTimeout(function(){
                   window.location.reload(1);
                 }, 5000);
               });
             }
           }); 
              
          //  récupèration du bouton de modification
        $(".editbtn").on('click', function(){
          let scoreUsing = $(this).data('scoreusing');
          let userId = $(this).data('iduser')
          $.post("http://localhost/Diop_Ousseynou_Quizz_BD/data/dataScore_edit.php", {id: userId})
          .done(function(result){
            data = $.parseJSON(result);
            if (data) {
              $("#user_id").val(data.id);
              $("#user_prenom").val(data.prenom);
              $("#user_nom").val(data.nom);
              $("#user_score").val(data.score);
              $("#save").val("Enregistrer un joueur");
            }
          });
        });
         
    
    
          }
      })
    
</script>
