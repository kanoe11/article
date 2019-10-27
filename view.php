<?php include('header.php');
require 'config.php';
?>

    <div class="container">
      <div class="row">
            <h1><?php echo $titre?></h1>
            <div class="post-body">
                  <p class="lead"><?php echo $prenom?><?php echo $nom?><</p>
                  <p><?php echo $contenu ?></p>
                  <p> <img src="img/featured-pic-3.jpeg" alt="..." class="img-fluid"></p>
            </div>
        </div>
    </div>
<?php include 'footer.php';
?>