<?php

//Удаление продукта

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once '../config/connect.php';

/*
 * Получаем ID продукта из адресной строки
 */

$id_Product = $_GET['id_Product'];

/*
 * Делаем запрос на удаление строки из таблицы products
 */

mysqli_query($connect, "DELETE FROM `products` WHERE `products`.`id_Product` = '$id_Product'");

/*
 * Переадресация на главную страницу
 */

header('Location: /');