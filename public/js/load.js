function fileLoading(target, fileName){
    target.load(`pages/${fileName}`);
}

// events

$(document).ready(function(){
    const form = $("#content");
     fileLoading(form, "connexion.php");
})