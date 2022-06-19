<?php
require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Курсова робота</title>
    <style>
        table {
            float: left;
        }


    </style>
</head>
<body>
<nav>
        <ul class="menu--vert">
            <li><a href="information.php">Інформація про мене</a>
            <li><a href="index.php">Вивід таблиць</a></li>
            </li>

        </ul>
    </nav>
    

<table style="margin: 40px">
<caption style="font-weight:bold"> Таблиця Матеріал  </caption>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>&#9998;</th>
        <th>&#10006;</th>
     
    </tr>
    <?php
    $material = mysqli_query($connect, "select * from material");
    $material = mysqli_fetch_all($material);
    foreach ($material as $material) {
        ?>
    
    <tr>
        <td><?php echo $material[0] ?></td>
        <td><?php echo $material[1] ?></td>
        <td><?php echo $material[2] ?></td>
        <td><a href="update.php?id=<?=$material[0] ?>">Оновити</a></td>
        <td><a href="vendor/delete.php?id=<?=$material[0] ?>">Видалити</a></td>
    </tr>
    <?php
    }
    ?>
</table>


<table style="margin: 40px">
<caption style="font-weight:bold"> Таблиця Обладнання  </caption>
    <tr>
        <th>ID</th>
        <th>Name</th>
     
    </tr>
    <?php
    $equipment = mysqli_query($connect, "select * from equipment");
    $equipment = mysqli_fetch_all($equipment);
    foreach ($equipment as $equipment) {
        ?>
    
    <tr>
        <td><?php echo $equipment[0] ?></td>
        <td><?php echo $equipment[1] ?></td>
    </tr>
    <?php
    }
    ?>
</table>



<table style="margin: 40px">
<caption style="font-weight:bold"> Таблиця Планова Вимога  </caption>
    <tr>
        <th>ID</th>
        <th>Name</th>
     
    </tr>
    <?php
    $planrequirement = mysqli_query($connect, "select * from planrequirement");
    $planrequirement = mysqli_fetch_all($planrequirement);
    foreach ($planrequirement as $planrequirement) {
        ?>
    
    <tr>
        <td><?php echo $planrequirement[0] ?></td>
        <td><?php echo $planrequirement[1] ?></td>
    </tr>
    <?php
    }
    ?>
</table>

<h2 style="font-size:30px">Додавання</h2>
<form action= "vendor/create.php" method="post">
    <caption>Додати новий Матеріал</caption>
    <p> Назва</p>
    <input type="text" name="title">
    <p>Ціна</p>
    <input type="number" name="price">
    <button type="submit">Додати</button>
</form>

<h2>Додати нове Обладнання</h2>
<form action= "vendor/create.php" method="post">
    <p> Назва</p>
    <input type="text" name="ename">
    <button type="submit">Додати</button>
</form>

<h2>Додати нову Планову Вимогу</h2>
<form action= "vendor/create.php" method="post">
    <p> Назва</p>
    <input type="text" name="plname">
    <button type="submit">Додати</button>
</form>

</body>
</html>