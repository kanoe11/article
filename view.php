<?php include('header.php');
require 'config.php';
if(isset($_GET['voir']) && !empty($_GET['voir'])) {
	$id = $_GET['voir'];
	$result = $mysqli->query(" select * from article where id = ".$id);
    $data = $result->fetch_all(MYSQLI_ASSOC);
}
?>

    <div class="container">
      <div class="row">
            <h1><?php echo $data[0]['titre']?></h1>
            <div class="post-body">
                  <p class="lead"> <?php echo $prenom?><?php echo $nom?><</p>
                  <p><?php echo $data[0]['contenu'] ?>
            </div>
        </div>
    </div>
<?php include 'footer.php';
?>