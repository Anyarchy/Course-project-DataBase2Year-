<?php
require_once '../config/connect.php';
$title = $_POST['title'];
$price = $_POST['price'];
$id = $_POST['id'];
mysqli_query($connect, "UPDATE `material` SET `Id` = '', `Name` = '$title', `Price` = '$price' 
WHERE `material`.`Id` ='$id' ");
header('Location: /');