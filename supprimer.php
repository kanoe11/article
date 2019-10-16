<?php
if (isset($_GET['del'])){
    $id = $_GET['del'];

    $mysqli->query("DELETE FROM article WHERE id=$id") or die($mysqli->error());

    header("Location: index.php");
}

?>