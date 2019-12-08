<?php
include('../../template/header.php');
include(realpath('../../config/config.php'));
if (isset($_GET['mod'])) {
    $id = $_GET['mod'];
}

$result = $mysqli->query("SELECT * FROM article WHERE id = " . $id) or die($mysqli->error());

$row = $result->fetch_array();
$id = $row['id'];
$titre = $row['titre'];
$contenu =  $row['contenu'];


/*if (isset($_POST['update'])){
        $id = $_POST['id'];
        $titre = $_POST['titre'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $contenu = $_POST['contenu'];
          
        
        $mysqli->query("UPDATE article SET titre='$titre' , nom='$nom' , prenom='$prenom' , contenu='$contenu' WHERE id='$id'") or die($mysqli->error);
    
    }*/
?>

<section id="article">
    <div class="container">
        <div class="col-lg-12 mx-auto text-center pb-5">
            <h2>Modifier un article</h2>
        </div>
        <div class="row">
            <!--form -->
            <div class="col-lg-7 mx-auto">
                <div class="bg-white rounded-lg shadow-sm p-5" id="formArtic">
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
                            <form role="form" action="process.php" method="POST">
                                <input type="hidden" value="<?php echo $id ?>" name="id" />
                                <div class="form-group">
                                    <label for="title">Titre</label>
                                    <input type="text" name="titre" id="titre" value="<?php echo $titre ?>" placeholder="Tire" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <select name='type_article'>
                                        <?php
                                        $result = $mysqli->query(" select * from type_article ");
                                        $data = $result->fetch_all(MYSQLI_ASSOC);

                                        for ($i = 0; $i < count($data); $i++) { ?>
                                            <option value="<?php echo $data[$i]['id'] ?>"> <?php echo $data[$i]['nom']; ?> </option>
                                        <?php } ?>
                                </div>
                                <div class="form-group">
                                    <label for="cardNumber">Contenu</label>
                                    <div class="input-group">
                                        <textarea name="contenu" id="contenu" class="md-textarea form-control" rows="3" id="contenu" class="form-control" required> <?php echo $contenu ?>  </textarea>
                                    </div>
                                </div>
                            
                                <button id="update" type="submit" name="update" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm "> UPDATE </button>
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
<?php include('../../template/footer.php');
