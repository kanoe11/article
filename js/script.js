$(document).ready(function(){
    $('#add').on('click' , function(){
        var titre = $("#titre").val();
        var contenu = $("#contenu").val();
        $.ajax(
            {
                url:'process.php',
                type: 'POST',
                data: {
                    titre: titre,
                    contenu: contenu
                },
                success: function (){
                alert('formuliare bien envoyer');
              },
                dataType:'text',
                error: function(resultat,statut){
                     alert('erreur non envoyer');
                }
            }
        )
    })
});