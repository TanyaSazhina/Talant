<?php
$db_host = "talant"; 
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'talant'; // Имя БД
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_base);
if (!$conn) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_error(). ', ошибка: ' . mysqli_connect_error();
}