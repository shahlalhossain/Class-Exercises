<?php

//print_r($_POST);

$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];

$dob = $year.'-'.$month.'-'.$day;

//echo $dob;

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$comments = $_POST['comments'];


$link = mysqli_connect("localhost", "root", "lict@2", "ftfl2nd");

$query = "INSERT INTO `ftfl2nd`.`ftflbook`(`first_name`, `last_name`, `email`, `password`, `dob`, `gender`, `comments`)
                                    VALUES ('$first_name', '$last_name', '$email', '$password', '$dob', '$gender', '$comments')";

mysqli_query($link, $query);

header('location:list.php');

?>
