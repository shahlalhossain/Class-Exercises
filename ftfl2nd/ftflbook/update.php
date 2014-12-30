<?php

//print_r($_POST);

$id = $_POST['id'];


$year=$_POST['year'];
$month=$_POST['month'];
$day=$_POST['day'];

$dob = $year.'-'.$month.'-'.$day;

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$comments = $_POST['comments'];

$link = mysqli_connect("localhost", "root", "lict@2", "ftfl2nd");

$query = "UPDATE `ftfl2nd`.`ftflbook` SET `first_name` = '".$first_name."',
                                          `last_name` = '".$last_name."',
                                          `email` = '".$email."',
                                          `password` = '".$password."',
                                          `dob` = '".$dob."',
                                          `gender` = '".$gender."',
                                          `comments` = '".$comments."'
    WHERE `ftflbook`.`id` = $id;";

mysqli_query($link, $query);

header('location:list.php');

?>