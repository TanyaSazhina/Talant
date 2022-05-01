<?php 
include 'components/connection.php';
$imgs = mysqli_query($conn,'SELECT * FROM `gallery`');
$certificates = mysqli_query($conn,'SELECT * FROM `certificates`');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slick.css">
    <title>Главная</title>
    <style>
        input:focus,
        button:focus,
        textarea:focus,
        select:focus {
            border: 0;
            outline: 0;
        }
    </style>
</head>

<body>
    <div class="success">
        <a class="close-area" href="index.php"></a>
        <a class="close" href="index.php">X</a>
        <div class="success__body">
            <picture><source srcset="img/success.webp" type="image/webp"><img class="success__img" src="img/success.png" alt="success"></picture>
            <h2 class="success__title">Спасибо !</h2>
            <p class="success__message">Ваше сообщение отправлено мы свяжемся с вами в ближайшее время</p>
            <a class="success__back" href="index.php">ВЕРНУТСЯ НАЗАД</a>
        </div>
    </div>
</body>

</html>