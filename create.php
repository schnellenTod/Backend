<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "lab_2";
$connect = mysqli_connect($servername, $username, $password, $database);

$start = $_POST['start'];
$finish = $_POST['finish'];
$priority = $_POST['priority'];
$discription = $_POST['discription'];

mysqli_query($connect, "INSERT INTO `lab_2_tab_1` (`id`, `Время начала`, `Время окончания`, `Приоритет`, `Описание`) VALUES (NULL, '$start', '$finish', '$priority', '$discription')");

header('Location:lab_2.php');

?>