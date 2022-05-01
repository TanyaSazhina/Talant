<?php 
include 'components/connection.php';
$teams = mysqli_query($conn,'SELECT * FROM `team`');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="foramt-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slick.css">
    <title>Команда</title>
</head>

<body>
<?php

include __DIR__ . '/template/header.php';

?>
    <main class="page">
        <section id="team" class="team">
            <div class="team__container container">
                <h2 class="team__title title">
                    Наша команда
                </h2>
                <div class="team__title-bg title-bg">
                    Наша команда
                </div>
                <div class="team__content content__section">
                    <?php foreach ($teams as $team) { ?>
                    <article class="team__coach coach">
                        <div class="flip-container">
                            <picture><source srcset="<?= $team['img']; ?>.webp" type="image/webp"><img class="coach__img" src="<?= $team['img']; ?>.jpg" alt="photo"></picture>
                            <div class="coach__description">
                                <h3 class="coach__name">
                                <?= $team['name'] ?>
                                </h3>
                                <div class="coach__info">
                                <?= $team['info'] ?>
                                </div>
                            </div>
                        </div>
                    </article>
                    <?php }?>
                </div>
                <div class="team__subtitle">
                    <p>
                    Опытные тренеры Magneto Fitness, всегда помогут с правильным подбором необходимой нагрузки, научат правильно выполнять физические упражнения, которые в разы повысят эффективность и безопасность тренировок и помогут достигнуть необходимого результата за гораздо более короткий срок.
                    </p>
                    <p>
                    Программа нагрузок выстраивается персонально для Вас, исходя из Ваших личных предпочтений и индивидуальных особенностей организма.
                    </p>
                    <p>
                    Все тренеры имеют высокую профессиональную квалификацию, являются дипломированными и сертифицированными специалистами. Кроме этого, они ежегодно проходят профильную аттестацию, подтверждая свои знания в области современного фитнеса.
                    </p>
                </div>
            </div>
        </section>
    </main>
    <?php

    include __DIR__ . '/template/footer.php';

    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>