<?php


require 'config.php';

$id = 0;
$update = false;
$titre = '';
$nom = '';
$prenom = '';
$contenu = '';

if (isset($_POST['enregister'])){
    $titre = $_POST['titre'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $contenu = $_POST['contenu'];
    $type = $_POST['type'];

    $mysqli->query("INSERT INTO article (titre, nom, prenom , contenu, type ) VALUES('$titre', '$nom', '$prenom', '$contenu','$type')") or  die (mysqli_error($mysqli));          
    
    header('Location: index.php');
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


