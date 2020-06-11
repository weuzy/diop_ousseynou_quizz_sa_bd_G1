<?php 
    include_once("../db/connect_to_BD.php");
    $stmt = $db->prepare("SELECT COUNT(*) FROM utilisateur");
    $stmt->execute();
    $rows = $stmt->fetch();

    // get total no. of pages
    $total_pages = ceil($rows[0]/$row_limit);


?>
<style>
    .pagination.bootpag{
        width: 100%;
        justify-content: space-between;
        font-size: 1.25rem;
    }
    .pagination.bootpag li:not(.next):not(.prev){
        display: none;
    }
    .pagination.bootpag li a{
         background-color: #89e8de;
         color: #ffff;
         border-radius: 1rem;
         padding: 7%;
    }
</style>
<div class="wrapper">
<div class="line col-4 align-items-center"></div>
<div class="col-2-md wrapper-header" style="margin-left:38%">liste des joueurs par score</div>
<div class="list-body col-6">
    <table class="table show table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>score</th>
            </tr>
        </thead>
        <tbody id="pg-results">
            
        </tbody>
    </table>
    <div class="panel-footer text-center">
        <div class="pagination"></div>
    </div>
    <a href="#" class="nav-link back_to_menu" id="back_to_menu">retour vers le menu</a>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#pg-results").load("data/showPlayer_list.php");
        $(".pagination").bootpag({
            total: <?php echo $total_pages; ?>,
            page: 1,
            maxVisible: 5,
            next: 'suivant',
            prev: 'précédent'
        }).on("page", function(e, page_num){
            e.preventDefault();
            /*$("#results").prepend('<div class="loading-indication"><img src="ajax-loader.gif" /> Loading...</div>');*/
            $("#pg-results").load("data/showPlayer_list.php", {"page": page_num});
        });
        $("#back_to_menu").click(function(){
            $("#content").load("pages/admin.php");
        })
       
    });
</script> 
