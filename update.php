<?php
require_once 'config/connect.php';
$material_id = $_GET['id'];
$material = mysqli_query($connect, "SELECT * FROM `material` WHERE `id`='$material_id' ");
$material = mysqli_fetch_assoc($material);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Оновити матеріал</title>
</head>
<body>
    
<h2>Оновити Матеріал</h2>
<form action= "vendor/update.php" method="post">
    <input type="hidden" name="id" value="<?= $material_id ?>">
    <p> Назва</p>
    <input type="text" name="title" value="<?= $material['title'] ?>">
    <p>Ціна</p>
    <input type="number" name="price" value="<?= $material['price'] ?>">
    <button type="submit">Оновити</button>
</form>

</body>
</html>