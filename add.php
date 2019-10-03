<?php 
require('config.php');
    // GET modifier = on est en modification et on alimente le formulaire avec les variables
    if (isset($_GET['modifier'])){
        $id = $_GET['modifier'];
        // requete pour recuper UNE LIGNE !!
        $result = $mysqli->query("SELECT * FROM article WHERE id=$id") or die($mysqli->error()); 
        // row = resultat de ma ligne , contient les champs et les valeurs
        $row = $result->fetch_array();
        $titre = $row['titre'];
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        //permet de supprimer des espaces au debut et a la fin d'une chaine 
        $contenu =  trim($row['contenu']);   
    } else {
        // on est en mode ajout et tous les variables sont vides 
        $titre = "";
        $nom = "";
        $prenom = "";
        $contenu = "";
    } 
  ?>
  <div> 
            <form action="process.php" method="POST">
                <div class="form-group">
                <label>Titre</label>
                <input type="text" name="titre" class="form-control" value="<?php echo $titre?>" placeholder="Entrer un titre">
                </div>
                <div class="form-group">
                <label style="display:grid">Nom<label>
                <input type="text" name="nom" class="form-control" value="<?php echo $nom?>" placeholder="Entrer le votre nom">
                </div>
                <div class="form-group">
                <label style="display:grid">Prenom<label>
                <input type="text" name="prenom"  class="form-control" value="<?php echo $prenom?>" placeholder="Entrer le votre prenom">
                </div>
                <div class="form-group">
                <label style="display:grid">Contenu<label>
                <textarea  name="contenu" class="form-control" placeholder="Saissisez votre text"  rows="5" cols="33" >
                    <?php echo $contenu ?> 
                </textarea>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary" name="enregister">Enregister</button> 
                </div>
            </form>
        </div> 