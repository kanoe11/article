<?php include('header.php');

?>

    <!-- Hero Section-->
      <div class="container">
        <div class="row">
            <div class="table-responsive">      
              <table class="table condensed"> 
                <thead>  
                    <tr> 
                        <th>Id </th>
                        <th>Titre </th>
                        <th> Auteur</th>
                        <th> apercu </th>
                        <th> Action </th>
                    </tr>
                </thead>
                <?php 
/*                   $offset = 50;
                  $beginPage = 1;
                    if(isset($_GET['beginPage'])) {
                      $beginPage = $_GET['beginPage'] * $offset ;
                    } */


                    $result = $mysqli->query(" select * from article where type = 'article'");
                    $data = $result->fetch_all(MYSQLI_ASSOC);
                    
                    for ( $i = 0 ; $i < count($data); $i++ ) { ?>
                       <?php if (strlen($data[$i]['contenu']) > 300) {
                          $strraccourcis =  substr($data[$i]['contenu'],0,12);
                        } else {
                            $strraccourcis =  $data[$i]['contenu'];
                          }
                     ?> 
                        <tr>
                        <td> <?php echo $data[$i]['id']; ?> </td>
                            <td> <?php echo $data[$i]['titre']; ?> </td>
                            <td> <?php echo $data[$i]['nom'].' '.$data[$i]['prenom']; ?> </td>
                            <td class="textToLong"> <?php echo $strraccourcis. "..." ; ?> </td>
                            <td> <?php echo "<a href='view.php?voir=".$data[$i]['id']."'>voir </a>" ?> </td>
                            <td> <?php echo "<a href='modify.php?mod=".$data[$i]['id']."'>modifier</a>" ?> </td>
                            <td> <?php echo "<a href='supprimer.php?del=".$data[$i]['id']."'>supprimer</a>" ?> </td>
                        </tr>
                   <?php }
                   $result->free();
                    ?>
              </table>
              <a href='?beginPage=1'>  1 </a>
              <a href='?beginPage=2'>  2 </a>
              <a href='?beginPage=3'>  3 </a>
              <a href='?beginPage=4'>  4 </a>
              <a href='?beginPage=5'>  5 </a>
            </div>
        </div>
  </div>
</html>