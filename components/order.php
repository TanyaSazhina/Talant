<?php

include "connection.php";

$name =  $_POST['name'];
$email =  $_POST['email'];
$id_plan =  $_POST['id_plan'];
$datetime =  date("Y.m.d");
$tel =  $_POST['tel'];
$adress =  $_POST['adress'];

$rs = mysqli_query($conn, "INSERT INTO orders (`name`, `tel`, `email`, `date`, `department`, `id_plan`) VALUES ('$name', '$tel', '$email', '$datetime', '$adress', '$id_plan')");
if ($rs) {
    header('Location: /answer.php');
} else {
    echo $name," <br>", $email," <br>", $id_plan," <br>", $datetime," <br>", $tel," <br>", $adress;
}