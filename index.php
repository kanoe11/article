<?php include('header.php')?>

    <!-- Hero Section-->
      <div class="container">
        <div class="row">
            <div class="table-responsive">      
              <table class="table condensed"> 
                <thead>  
                    <tr> 
                        <th>Titre </th>
                        <th> Auteur</th>
                        <th> apercu </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <?php 
                    $result = $mysqli->query("SELECT  * FROM article ");

                    while ($data = $result->fetch_assoc()) { ?>
                        <tr>
                            <td> <?php echo $data['titre']; ?> </td>
                            <td> <?php echo $data['nom'].' '.$data['prenom']; ?> </td>
                            <td class="textToLong"> <?php echo $data['contenu']; ?> </td>
                            <td> <?php echo "<a href='view.php?id=".$data['id']."'>voir </a>" ?> </td>
                        </tr>
                   <?php }
                   $result->free();
                    ?>
              </table>
            </div>
        </div>
  </div>
</html>