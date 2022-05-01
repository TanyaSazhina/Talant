<?php

include 'components/connection.php';
$plans = mysqli_query($conn,'SELECT * FROM `plans`');

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slick.css">
    <title>Абонементы</title>
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
<?php

include __DIR__ . '/template/header.php';

?>
    <main class="page">
        <section id="plans" class="plans">
            <div class="plans__container container">
                <h2 class="plans__title title">
                    Абонементы
                </h2>
                <div class="plans__title-bg title-bg">
                    Абонементы
                </div>
                <div class="plans__content content__section">
                    <?php foreach ($plans as $plan) {?>
                    <article class="plans__item item__<?=$plan['color']?>">
                        <h3 class="plans__item-title"><?=$plan['name']?></h3>
                        <img class="plans__stars" src="img/<?php if ($plan['color'] == 'black') { echo 'stars__white'; } else {echo 'stars__dark';} ?>.svg" alt="stars">
                        <div class="plans__item-price"><?=$plan['price']?></div>
                        <ul class="plans__item-list">
                            <li class="plans__item-point"><?=$plan['point1']?></li>
                            <li class="plans__item-point"><?=$plan['point2']?></li>
                            <li class="plans__item-point"><?=$plan['point3']?></li>
                            <li class="plans__item-point"><?=$plan['point4']?></li>
                        </ul>
                        <div class="plans__item-btn">
                            <a class="plans__item-link" href="buy.php?id=<?=$plan['id']?>">Заказать</a>
                        </div>
                    </article>
                    <?php }?>
                </div>
            </div>
        </section>
        <section class="plans__text container">
            <h2 class="plans__title title">
                Преимущества покупки абонемента в фитнес центр
            </h2>
            <p>
            Покупая абонемент в фитнес в Омске, вы получаете отличную возможность сэкономить свои денежные средства. Кроме того, посещать тренировки можно в удобное для вас время в соответствии с установленным расписанием. Вам не нужно подстраиваться под строгие рамки, достаточно приходить тогда, когда у вас есть желание и возможности.
            </p>
            <p>
            Абонемент в фитнес можно купить всего на один месяц. Если же вам нравится заниматься у нас, тогда предлагаем выбрать "Годовой безлимит". Он дает право посещать клуб тогда, когда вы этого захотите. Вы сможете воспользоваться:
            </p>
            <ul>
                <li>групповыми тренировками;</li>
                <li>тренажерным залом;</li>
                <li>сауной.</li>
            </ul>
            <p>
            Занимайтесь столько, сколько нужно. Нет никаких рамок и ограничений. Приходите в любой день недели. Мы будем рады видеть вас ежедневно по будням и по выходным.
            </p>
            <p>
            Пользоваться услугами по годовому абонементу можно в течение 12 месяцев с момента оформления карты.
            </p>
            <p>
            Вы также можете выбрать абонемент "Годовой дневной". Он подходит тем, кто планирует тренироваться только в утренние и дневные часы. По условиям предложения, вы сможете посещать клуб в будни с 8 до 17 часов и по выходным с 9 до 21 часов.
            </p>
            <p>
            Цена одной тренировки составляет 300 рублей. Покупая абонемент, вы автоматически снижаете стоимость наших предложений и делаете себе приятный подарок.
            </p>
            <p>
            Ходить заниматься к нам не только приятно и полезно, но и выгодно.
            </p>
        </section>
    </main>
    <?php

    include __DIR__ . '/template/footer.php';

    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>