$(document).ready(function(){

    $('#add').click(function(e){
       // empeche le formulaire de s'envoyer en html
       debugger;
        e.preventDefault();
        var titre = $("#titre").val();
        var contenu = $("#contenu").val();
        $.ajax({
                url:'process.php',
                type: 'POST',
                data: {
                    titre: titre,
                    contenu: contenu,
                    save : ''
                },
                success: function (data){
                    console.log(data);
                    alert('formuliare bien envoyer');
              },
                error: function(resultat,statut){
                     alert('erreur non envoyer');
                }
            });
    });
});