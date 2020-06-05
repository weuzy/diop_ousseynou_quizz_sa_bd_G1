const form = document.getElementById('form-connexion');
const content = document.getElementById('content');
const inscription = document.getElementById('inscription');

inscription.addEventListener('click',()=>{
    sendData('inscription',true);
})

form.addEventListener('submit',()=>{

    sendData('accueil',true);

})

function sendData(lien,is_post)
{
    var loadAjax= new XMLHttpRequest();
    loadAjax.onreadystatechange=()=>
    {
        if((loadAjax.readyState==4) && loadAjax.status==200)
        {
            let data=loadAjax.responseText;
            if(data=="error")
            {
                  alert(" une erreur s'est produite");
            }
            else
            {
                document.getElementById('content').innerHTML=data;
            }
        }
    } 
    
    var is_get="";
    if(is_post)
    {
        is_get=getFormData();
    }
    loadAjax.open('POST','traitement/display.php?lien='+lien,true);
    loadAjax.send(is_get);
}

// la function qui va recupéré les données du formulaire

function getFormData()
{
    //connexion-form
    var form = document.getElementById('form-connexion');

    // FormData est une fonction JS predefini 
    // on lui passe le id d'un formulaire il recupere tout les données et le place dans une variable

    var is_get = new FormData(form);

   return is_get;
}
