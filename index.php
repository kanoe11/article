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
  <?php require('config.php') ?>
        <?php require('process.php');?>
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
            <!-- Navbar Brand --><a href="#" class="navbar-brand">Muzik Kontrol</a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.php" class="nav-link active ">Home</a>
              </li>
              <li class="nav-item"><a href="#" class="nav-link ">Blog</a>
              </li>
              <li class="nav-item"><a href="#" class="nav-link ">Post</a>
              </li>
              <li class="nav-item"><a href="#footer" class="nav-link ">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Section-->
    <section style="background: url(img/ampli.jpg); background-size: cover; background-position: center center" class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h1>Muzik Kontrol - blog </h1>
          </div>
        </div><a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> Scroll Down</a>
      </div>
    </section>
    <!-- Intro Section-->
    <section class="intro">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2 class="h3">Blog</h2>
            <p class="text-big">Avis de produit , analyse de marque , conseil en tout genre. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="featured-posts no-padding-top">
      <div class="container">
        <!-- Post-->
        <div class='container'>
        <?php
            $result =  $mysqli->query("SELECT  * FROM article ");
            ?>
        <div>
        <div class="row d-flex align-items-stretch">
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                <header class="post-header">
                <?php while($row = $result->fetch_assoc()) : ?>
                  <div class="category"><a href="#">Muzik</a></div><a href="post1.html">
                    <h2 class="h4">Comment insonoriser une pièce ?<?php echo $row['titre']; ?></h2></a>
                </header>
                <p><?php echo $row['contenu']; ?></p>
                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/man.png" alt="..." class="img-fluid"></div>
                    <div class="title"><span><?php echo $row['prenom'];?>  <?php echo $row['nom'];?></span></div></a>
                  <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                  <div class="comments"><i class="icon-comment"></i>12</div>
                </footer>
              </div>
            </div>
          </div>
          <div class="image col-lg-5"><img src="img/studio.jpg" alt="..."></div>
        </div>
        <!-- Post        -->
        <div class="row d-flex align-items-stretch">
          <div class="image col-lg-5"><img src="img/travel.jpeg" alt="..."></div>
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                <header class="post-header">
                  <div class="category"><a href="#">Voyage</a><a href="#">Equipement</a></div><a href="post2.html">
                    <h2 class="h4">Le top des Accessoires et Gadgets de Voyage</h2></a>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/man.png" alt="..." class="img-fluid"></div>
                    <div class="title"><span>Mark Spencer</span></div></a>
                  <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                  <div class="comments"><i class="icon-comment"></i>1</div>
                </footer>
              </div>
            </div>
          </div>
        </div>
        <!-- Post                            -->
        <div class="row d-flex align-items-stretch">
          <div class="text col-lg-7">
            <div class="text-inner d-flex align-items-center">
              <div class="content">
                <header class="post-header">
                  <div class="category"><a href="#">Muzik</a><a href="#">Concert</a></div><a href="post3.html">
                    <h2 class="h4">Venez (Re)découvrire le festival Crissbox</h2></a>
                </header>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrude consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                    <div class="avatar"><img src="img/man.png" alt="..." class="img-fluid"></div>
                    <div class="title"><span>Yves Letrec</span></div></a>
                  <div class="date"><i class="icon-clock"></i>1 week ago</div>
                  <div class="comments"><i class="icon-comment"></i>12</div>
                </footer>
              </div>
            </div>
          </div>
          <div class="image col-lg-5"><img src="img/festival.jpg" alt="..."></div>
        </div>
        <a href="add.php?modifier=<?php echo $row['id']; ?>"
                            class="btn btn-info">Modifier</a>
                            <a href="process.php?supprimer=<?php echo $row['id']; ?>"
                            class="btn btn-danger">Supprimer</a>
                            <?php  endwhile; ?>
                            <div>
                <a href="add.php" class="btn btn-success">Ajouter un article</a>
            </div>
      </div>
    </section>
    <!-- Divider Section-->
    <!-- Latest Posts -->
    <!-- Newsletter Section-->
    <!-- Gallery Section-->
    <!-- Page Footer-->
    <section id="footer">
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="logo">
              <h6 class="text-white">Contact</h6>
            </div>
            <div class="contact-details">
            <a href="https://goo.gl/maps/qUKwzLYqT5oHEsaL7"><p><i class="fa fa-map-marker fa-2x"></i>92 Rue St Dizier Nancy, France</p></a>
              <p><i class="fa fa-phone fa-1x"></i>+33 3 54 16 24 51</p></a>
              <a href="musickontrol@sfr.fr"><p><i class="fa fa-envelope-o fa-1x"></i>musickontrol@sfr.fr</p></a>
              <ul class="social-menu">
                <li class="list-inline-item"><a href="https://fr-fr.facebook.com/pages/category/Electronics-Store/Music-Kontrol-170296356950248/"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a href="https://www.instagram.com/musickontrol"><i class="fa fa-instagram fa-1x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="menus d-flex">
            <ul class="list-unstyled pr-1">
                <li class="text-center"> <a href="#">Heure d'ouvereture</a></li>
                <li> <a href="#">Lundi : FERMÉE</a></li>
                <li> <a href="#">Mardi: 10:00 - 18:30</a></li>
                <li> <a href="#">Mercredi: 10:00 - 18:30</a></li>
                <li> <a href="#">Jeudi: 10:00 - 18:30</a></li>
                <li> <a href="#">Vendredi: 10:00 - 18:30</a></li>
                <li> <a href="#">Samedi: 10:00 - 18:30</a></li>
                <li> <a href="#">Dimanche: FERMÉE</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2019. All rights reserved. Muzik Kontrol.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
</section>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>