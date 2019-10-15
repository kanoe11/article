<?php
if (isset($_GET['supprimer'])){
    $id = $_GET['supprimer'];
    $mysqli->query("DELETE FROM article WHERE id=$id") or die($mysqli->error());

    header("Location: index.php");
}

?>