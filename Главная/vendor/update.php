<?php

//Обновление информации о продукте

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$id_Product = $_POST['id_Product'];
$Product_Name = $_POST['Product_Name'];
$Product_Composition = $_POST['Product_Composition'];
$Product_Price = $_POST['Product_Price'];

/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($connect, "UPDATE `products` SET `Product_Name` = '$Product_Name',`Product_Composition` = '$Product_Composition' , `Product_Price` = '$Product_Price' WHERE `products`.`id_Product` = '$id_Product'");

/*
 * Переадресация на главную страницу
 */

header('Location: /');