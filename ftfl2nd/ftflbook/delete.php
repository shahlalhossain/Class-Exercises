<?php

$id = $_GET['id'];

$link = mysqli_connect("localhost", "root", "lict@2", "ftfl2nd");

$query = "DELETE FROM `ftfl2nd`.`ftflbook` WHERE `ftflbook`.`id` = $id";

mysqli_query($link, $query);

header('location:list.php');

?>
