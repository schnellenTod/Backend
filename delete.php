<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "lab_2";
$connect = mysqli_connect($servername, $username, $password, $database);

$id=$_GET['id'];

mysqli_query($connect, "DELETE FROM `lab_2_tab_1` WHERE `lab_2_tab_1`.`id` = '$id'");

header('Location:lab_2.php');

?>