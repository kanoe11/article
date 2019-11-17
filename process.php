<?php


require 'config.php';

$id = 0;
$update = false;
$titre = '';
$contenu = '';

if (isset($_POST['enregister'])){
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $typeIdArticle = $_POST['type_article'];
    $user_id = 0;
    //Si la requete est executé correctement elle renvoie vrai sinon il y a forcement une erreur
    //Ca evite de faire des die pour rien 
    if( $mysqli->query("INSERT INTO article (titre, user_id , contenu, type_article_id) VALUES('$titre', '$user_id','$contenu','$typeIdArticle')")) {
        header('Location: index.php');
    }
    echo 'Erreur de base de données : '. mysqli_error($mysqli);       
   
    
}    

if (isset($_GET['supprimer'])){
    $id = $_GET['supprimer'];
    $mysqli->query("DELETE FROM article WHERE id = ".$id) or die($mysqli->error());

    header("Location: index.php");
}


if (isset($_POST['update'])){
    echo "ici";
    $titre = $_POST['titre'];
    $id = $_POST['id'];
    $nom =  $_POST['nom'];
    $prenom = $_POST['prenom'];
    $contenu =  $_POST['contenu'];
    $resultat  =  addslashes($contenu);
    $sql = "UPDATE article SET titre='$titre' , nom='$nom' , prenom='$prenom' , contenu='".$resultat."' WHERE id=".$id;
     
    $mysqli->query($sql) or  die (mysqli_error($mysqli));
    



    header("Location: index.php");
}


