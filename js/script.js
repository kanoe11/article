$(document).ready(function(){

    $('#add').click(function(e){
       // empeche le formulaire de s'envoyer en html
        e.preventDefault();
        var titre = $("#titre").val();
        var contenu = $("#contenu").val();
        $.ajax({
                url:'/article/process.php',
                type: 'POST',
                data: {
                    titre: titre,
                    contenu: contenu,
                    save : ''
                },
                success: function (data){
                    console.log('formuliare bien envoyer');
              },
                error: function(resultat,statut){
                     alert('erreur non envoyer');
                }
            });
    });
    
    $('.delete').click(function(e){
         e.preventDefault();
         var id = $(this).attr("data-id");
         
         $.ajax({
                 url:'/article/template/article/supprimer.php',
                 type: 'GET',
                 data: {
                     del : id
                 },
                 success: function (data){
                     console.log(data);
                     $(id).remove();
               },
                 error: function(resultat,statut){
                      alert('erreur non envoyer');
                 }
             });
     });

     $('.modify').click(function(e){
        e.preventDefault();
        var titre = $("#titre").val();
        var contenu = $("#contenu").val();
        var id = $(this).attr("data-id");
        
        $.ajax({
                url:'/article/procress.php',
                type: 'POST',
                data: {
                    titre : titre,
                    contenu : contenu,
                    modify : id 
                    
                },
                success: function (data){
                    console.log(data);
                    
              },
                error: function(resultat,statut){
                     alert('erreur non envoyer');
                }
            });
    });    
});