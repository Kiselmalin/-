<?php

//Добавление нового продукта


/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */

$Product_Name = $_POST['Product_Name'];
$Product_Composition = $_POST['Product_Composition'];
$Product_Price = $_POST['Product_Price'];

/*
 * Делаем запрос на добавление новой строки в таблицу products
 */

mysqli_query($connect,"INSERT INTO `products` (`id_Product`, `Product_Name`, `Product_Composition`, `Product_Price`) VALUES (NULL, '$Product_Name', '$Product_Composition', '$Product_Price')");

/*
 * Переадресация на главную страницу
 */

header('Location: /');