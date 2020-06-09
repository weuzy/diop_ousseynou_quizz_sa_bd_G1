<div class="wrapper">
<div class="line col-4 align-items-center"></div>
<div class="col-2-md wrapper-header" style="margin-left:38%">liste des joueurs par score</div>
<div class="list-body col-6">
    <div class="nav-body">
        <!-- Table -->
        <table width="100%" class="text-center" id="emp_table" border="0">
            <tr class="tr_header">
                <th>Prénom</th>
                <th>Nom</th>
                <th>Score</th>
            </tr>
        </table>
        <div id="div_pagination">
            <input type="hidden" id="txt_rowid" value="0">
            <input type="hidden" id="txt_allcount" value="0">
            <input type="button" class="button" value="Previous" id="but_prev" />

            <input type="button" class="button" value="Next" id="but_next" />
        </div>
    </div>
</div>
</div>
<script>
    // Total number of rows visible at a time
    var rowperpage = 2;
        $(document).ready(function(){

            getData();  // getting data

            $("#but_prev").click(function(){
                var rowid = Number($("#txt_rowid").val());
                var allcount = Number($("#txt_allcount").val());
                rowid -= rowperpage;
                if(rowid < 0){
                    rowid = 0;
                }
                $("#txt_rowid").val(rowid);
                getData();
            });

            $("#but_next").click(function(){
                var rowid = Number($("#txt_rowid").val());
                var allcount = Number($("#txt_allcount").val());
                rowid += rowperpage;
                if(rowid <= allcount){
               
                    $("#txt_rowid").val(rowid);
                    getData();
                    alert();
                }

            });
        });
          /* requesting data */
          function getData(){
            var rowid = $("#txt_rowid").val();
            var allcount = $("#txt_allcount").val();

            $.ajax({
                url:'data/showPlayer_list.php',
                type:'post',
                data:{rowid:rowid,rowperpage:rowperpage},
                //  dataType:'JSON',
                success:function(response){
                    createTablerow(response);
                }
            });

        }
         /* Create Table */
         function createTablerow(data){

            var dataLen = data.length;

            $("#emp_table tr:not(:first)").remove();

            for(var i=0; i<dataLen; i++){
                if(i == 0){
                    var allcount = data[i]['allcount'];
                    $("#txt_allcount").val(allcount);
                }else{
                    var prenom = data[i]['prenom'];
                    var nom = data[i]['nom'];
                    var score = data[i]['score'];

                    $("#emp_table").append("<tr id='tr_"+i+"'></tr>");
                    $("#tr_"+i).append("<td align='center'>"+prenom+"</td>");
                    $("#tr_"+i).append("<td align='left'>"+nom+"</td>");
                    $("#tr_"+i).append("<td align='center'>"+score+"</td>");
                }
            }
            }
</script>