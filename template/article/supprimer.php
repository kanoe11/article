<?php
if (isset($_GET['del'])){
    $id = $_GET['del'];

    require 'config.php';
    $mysqli->query("DELETE FROM article WHERE id =".$id) or die($mysqli->error());

    header("Location: index.php");
}

?>