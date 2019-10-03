<html>
    <head>
        <title>Article</title>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <link rel ="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php require_once 'process.php'; ?>

        <div class='container'>
        <?php
            $result =  $mysqli->query("SELECT  * FROM article ");
            ?>
        
        <div>
            <div>
                <a href="add.php" class="btn btn-info">Ajouter un article</a>
            </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>contenu</th>
                            <th colspan="2">Action</th>                          
                        </tr>
                    </thead>
                    <?php
            while($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['titre']; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['prenom']; ?></td>
                        <td><?php echo $row['contenu']; ?></td>
                        <td>
                        <a href="add.php?modifier=<?php echo $row['id']; ?>"
                            class="btn btn-info">Modifier</a>
                            <a href="process.php?supprimer=<?php echo $row['id']; ?>"
                            class="btn btn-danger">Supprimer</a>
                            <a href="blog.php" class="btn btn-primary">Voir plus</a>
                        </td>
                    </tr>
                <?php  endwhile; ?>
                </table>
            </div>         

        <?php
        function pre_r($array) {
            echo '<pre';
            print_r($array);
            echo '</pre';
        }
        ?>

    </div> 
    </body>
</html>
