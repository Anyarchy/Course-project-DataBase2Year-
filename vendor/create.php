<?php
require_once '../config/connect.php';
$title = $_POST['title'];
$price = $_POST['price'];

mysqli_query($connect, "INSERT INTO `material` (`Id`, `Name`, `Price`) VALUES (NULL, '$title', '$price')");

$ename = $_POST['ename'];
mysqli_query($connect, "INSERT INTO `equipment` (`Id`, `Name`) VALUES (NULL, '$ename')");

$plname = $_POST['plname'];
mysqli_query($connect, "INSERT INTO `planrequirement` (`Id`, `Name`) VALUES (NULL, '$plname')");

header('Location: /');