<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Muzik Kontrol - Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Fancybox-->
    <link rel="stylesheet" href="vendor/@fancyapps/fancybox/jquery.fancybox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
        <?php 
        require('config.php');
        require('process.php');?>
       
       <header class="header">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="#">
                  <div class="form-group">
                    <input type="search" name="search" id="search" placeholder="What are you looking for?">
                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand --><a href="index.html" class="navbar-brand">Muzik Kontrol</a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.html" class="nav-link active ">Home</a>
              </li>
              <li class="nav-item"><a href="blog.html" class="nav-link ">Blog</a>
              </li>
              <li class="nav-item"><a href="post.html" class="nav-link ">Post</a>
              </li>
              <li class="nav-item"><a href="#" class="nav-link ">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
            <?php
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
            <h2>Article</h2>
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

        <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="logo">
              <h6 class="text-white">Bootstrap Blog</h6>
            </div>
            <div class="contact-details">
              <p>53 Broadway, Broklyn, NY 11249</p>
              <p>Phone: (020) 123 456 789</p>
              <p>Email: <a href="mailto:info@company.com">Info@Company.com</a></p>
              <ul class="social-menu">
                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-behance"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="menus d-flex">
              <ul class="list-unstyled">
                <li> <a href="#">My Account</a></li>
                <li> <a href="#">Add Listing</a></li>
                <li> <a href="#">Pricing</a></li>
                <li> <a href="#">Privacy &amp; Policy</a></li>
              </ul>
              <ul class="list-unstyled">
                <li> <a href="#">Our Partners</a></li>
                <li> <a href="#">FAQ</a></li>
                <li> <a href="#">How It Works</a></li>
                <li> <a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2017. All rights reserved. Your great site.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>