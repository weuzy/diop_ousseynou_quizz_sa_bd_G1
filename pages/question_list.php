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
    margin-top: 29rem;
    position: absolute;
    text-align: center;
    margin-left: 13%;
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
<div class="col-2-md wrapper-header" style="margin-left:38%">VEUILLEZ LISTER VOS QUESTIONS</div>
<div class="show" style="margin-left:28%;">
<form>
      <table class="table">
        <tr>
          <td colspan="4" class="add">
            <input type="hidden" id="quest_id" value="">
            <input type="text" placeholder="énoncé" required id="quest_enonce">&nbsp;&nbsp;
            <input type="text" placeholder="type" required id="quest_type">&nbsp;&nbsp;
            <input type="text" placeholder="réponses" required id="quest_reponses">&nbsp;&nbsp;
            <input type="button" id="save" style="background-color:teal;color:white;" value="Edit Question">
          </td>
        </tr>
        <small class="error"></small>
        <small class="success"></small>
      </table>
    </form>
    <div class="col" id="scrollZone"></div>
    <div class="show_question">

    </div>
</div>
<a href="#" class="back_to_menu">retour vers le menu</a>
</div>
<script>
    $(function(){
        alert('ok')
        let offset = 0 ;
        const display = $(".show_question");
        $.ajax({
          type: "POST",
          url: "http://localhost/Diop_Ousseynou_Quizz_BD/data/getQuestion.php",
          data: {limit:5,offset:offset,id_question:id_question},
          dataType: "JSON",
          success: function(data){
            display.html('');
            printData(data,display);
            offset += 5;
          }
        });
        // ZONE SCROLLING
        const scrollZone = $("#scrollZone")
          scrollZone.scroll(function(){
            const st = scrollZone[0].scrollTop;
        const sh = scrollZone[0].scrollHeight;
        const ch = scrollZone[0].clientHeight;
        console.log(st,sh, ch);
        
        if(sh-st <= ch){
            $.ajax({
                type: "POST",
                url: "http://localhost/Diop_Ousseynou_Quizz_BD/data/getQuestion.php",
                data: {limit:5,offset:offset},
                dataType: "JSON",
                success: function (data) {
                    printData(data,display);
                 
                    offset +=5;
                }
            });
        }   
          });
        function printData(data,display){
          $.each(data, function(indice,question){
            
              display.append(`
              <h5 class="mt-10" style="text-align:center;font-family:Buda;margin-top:3rem">${question.id_question}.&nbsp;${question.enonce}</h5><h5>${question.reponses}</h5>`) 
            
            // if (data['type'] = 'qcs') {
            //   display.append(`
            //   <h5 class="mt-10" style="text-align:center;font-family:Buda;margin-top:3rem">${question.id}.&nbsp;${question.enonce}</h5><input type="radio" >
            //   `)
            // } 
            
          })
        }

        
    })
</script>
