<?php
require_once '../config/connect.php';
$material_id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `material` WHERE `material`.`Id` = '$id'");
header('Location: /');