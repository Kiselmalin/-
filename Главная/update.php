<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'config/connect.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id_Product=1
     */

    $id_Product = $_GET['id_Product'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id_Product` = '$product_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $product = mysqli_fetch_assoc($product);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>MIRACLE PAY - Обновление позиции</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="images/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Roboto:ital,wght@0,400;0,700;1,400&family=Zen+Dots&display=swap" rel="stylesheet">
</head>
<body>
    <form action="vendor\update.php" method="post">
        <input type="hidden" name="id_Product" value="<?= $product['id_Product'] ?>">
        <h3>Обновление позиции</h3>
        <p>Название товара</p>
        <input type="text" name="Product_Name" value="<?= $product['Product_Name'] ?>"> 
        <p>Описание/Состав товара</p>
        <textarea name ="Product_Composition"value="<?= $product['Product_Composition'] ?>"></textarea>
        <p>Цена</p>
        <input type ="number" name="Product_Price"value="<?= $product['Product_Price'] ?>"><br>
        <button type="submit">Обновить</button>
</body>
</html>