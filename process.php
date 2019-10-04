<?php



$mysqli =  new mysqli('localhost', 'root', '', 'blog') or die (mysqli_error($mysqli));

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

    $mysqli->query("INSERT INTO article (titre, nom, prenom , contenu) VALUES('$titre', '$nom', '$prenom', '$contenu')") or  die (mysqli_error($mysqli));
            
    
    header('Location: index.php');
}    

if (isset($_GET['supprimer'])){
    $id = $_GET['supprimer'];
    $mysqli->query("DELETE FROM article WHERE id=$id") or die($mysqli->error());

    header("Location: index.php");
}

if (isset($_POST['maj'])){
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $contenu = $_POST['contenu'];

    $mysqli->query("UPDATE article SET titre='$titre' , nom='$nom , prenom='$prenom , contenu='$contenu' WHERE id='$id'") or die($mysqli->error);

    header('Location: index.php');
}