<?php

include "connection.php";

$name =  $_POST['name'];
$email =  $_POST['email'];
$datetime =  $_POST['datetime'];
$tel =  $_POST['tel'];
$adress =  $_POST['adress'];
$massage =  $_POST['massage'];

$rs = mysqli_query($conn, "INSERT INTO sub (`name`, `tel`, `email`, `datetime`, `adress`, `massage`) VALUES ('$name', '$tel', '$email', '$datetime', '$adress', '$massage')");
if ($rs) {
    header('Location: /answer.php');
} else {}