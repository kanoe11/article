
    <?php
    include 'header.php';
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

                <section id="article"  >
        <div class="container">
        <div class="col-lg-12 mx-auto text-center pb-5">
            <h2>Ajouter un article</h2>
        </div>
        <div class="row">
            <!--form -->
            <div class="col-lg-7 mx-auto">
            <div class="bg-white rounded-lg shadow-sm p-5" id = "formArtic">
                <!--  form tabs -->
                <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
                <li class="nav-item">
                    <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                                    <i class="fab fa-wpforms"></i>
                                        Formulaire Article
                                    </a>
                </li>
                </ul>
                <!-- End -->

                <!--  form content -->
                <div class="tab-content">
                    
                <!--  info-->
                    
                <div id="nav-tab-card" class="tab-pane fade show active">
                    <form role="form" action="process.php" method="POST" >
                    <div class="form-group">
                        <label for="title">Titre</label>
                        <input type="text" name="titre" value="<?php echo $titre?>" placeholder="Tire" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" name="prenom"  value="<?php echo $prenom?>" placeholder="Prenom" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">nom</label>
                        <input type="text" name="nom" value="<?php echo $nom?>"  placeholder="Nom" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="cardNumber">Contenu</label>
                        <div class="input-group">
                        <textarea name="contenu" id="form7" class="md-textarea form-control" rows="3" class="form-control" required></textarea> 
                        <?php echo $contenu ?> 
                        </div>
                    </div>
                    <div class="form-group">
                        <select name="type">
                        <?php
                        $sql = "";
                        for($i = 0; ; $i++)
                        <?>
                        <option value="article">article</option>
                        <option value="news">news</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                        </div>
                        <div class="col-sm-4">
                        </div>
                    </div>
                    <button type="submit" name="enregister" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Envoyez  </button>
                    </form>
                </div>
                </div>
                <!-- End -->
            </div>
            </div>
        </div>
        </div>
            </div>
            </div>
            </div>
        </div>
            </div>
            </div>
        </div>
        </section>
<?php include 'footer.php';