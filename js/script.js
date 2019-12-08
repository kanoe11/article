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
                     $('tr[data-id='+id+']').remove();

               },
                 error: function(resultat,statut){
                      alert('erreur non envoyer');
                 }
             });
     });

     $('#update').click(function(e){
        e.preventDefault();
        var titre = $("#titre").val();
        var contenu = $("#contenu").val();
        var id = $('input[name="id"]').val();
        
        $.ajax({
                url:'/article/process.php',
                type: 'POST',
                data: {
                    titre : titre,
                    contenu : contenu,
                    id : id,
                    update : '' 
                },
                success: function (data){
                    $(location).attr('href', '/article/index.php');
              },
                error: function(resultat,statut){
                     alert('erreur non envoyer');
                }
            });
    });    
});