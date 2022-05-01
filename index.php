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
<?php include __DIR__ . '/template/header.php'; ?>
    <main class="page">
        <section class="preview">
            <div class="preview__container container">
                <div class="preview__content">
                    <div class="preview__title">Развивай свои таланты <br> вместе с лучшими</div>
                    <div class="preview__text">Записаться на первое
                        бесплатное занятие</div>
                    <div class="preview__btn"><a class="preview__link" href="#">Записаться</a></div>
                </div>
                <div class="preview__social">
                    <a class="_icon-inst preview__icon" href="#"></a>
                    <a class="_icon-tt preview__icon" href="#"></a>
                    <a class="preview__icon _icon-yt" href="#"></a>
                </div>
            </div>
        </section>
        <section id="about" class="about">
            <div class="about__container container">
                <h2 class="about__title title">
                    О НАС
                </h2>
                <div class="about__title-bg title-bg">
                    О НАС
                </div>
                <picture><source srcset="img/line.webp" type="image/webp"><img class="about__line" src="img/line.png" alt="line"></picture>
                <div class="about__content content__section">
                    <picture><source srcset="img/about.webp" type="image/webp"><img class="about__img" src="img/about.jpg" alt="img"></picture>
                    <div class="about__text">
                        <p>Talant – клуб с особенной атмосферой! Это место, где достигаются цели.</p>
                        <p><br>
                            Наши клиенты занимаются под 100% вниманием тренеров-профессионалов.
                            Приходите на тренировки и получайте гарантированный результат уже через 2 месяца, а на
                            первом
                            занятии - тонус мышц, заряд бодрости и хорошее настроение!
                        </p><br>
                        <p>
                            Мы следим за всеми новшествами, свежими течениями в фитнес-индустрии, и выбираем самые
                            лучшие
                            для
                            наших гостей. Мы хотим, что бы Ваши тренировки в нашем клубе были максимально эффективными и
                            что
                            важно, нескучными. Только в нашем клубе вы сможете пройти фитнес тестирование на уникальном
                            оборудовании Dexbee, которое без ошибок выявит состояние вашего сердца, определит текущий
                            уровень
                            физической подготовленности, для эффективного построения тренировочного процесса, чтобы вы
                            быстрее
                            достигали своих целей. Это специальный датчик, который считает сожженные на тренировке
                            калории,
                            ваш
                            пульс и помогает тренеру контролировать вашу тренировку – чтобы она была эффективной и
                            безопасной:
                            вы можете тренироваться в разных пульсовых зонах, в зависимости от ваших целей – похудеть,
                            нарастить
                            мышцы или, если ваша цель - оздоровление. Все данные отображаются на экране монитора в зале.
                            Пульсовые зоны горят разными цветами фона и тренер видит, когда вам нужно начинать следующий
                            подход,
                            когда вы халтурите или наоборот, слишком переутомились и перегружаете свое сердце.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="advantages" class="advantages">
            <div class="advantages__container container">
                <h2 class="advantages__title title">
                    преимущества
                </h2>
                <div class="advantages__title-bg title-bg">
                    преимущества
                </div>
                <div class="advantages__content content__section">
                    <article class="advantages__item">
                        <a href="team.php">
                            <picture><source srcset="img/advantages/advantages1.webp" type="image/webp"><img class="advantages__cart" src="img/advantages/advantages1.jpg" alt="cart"></picture>
                            <span class="advantages__number">1</span>
                            <span class="advantages__cart-title">Высоко
                                квалифицированный
                                тренерский состав</span>
                        </a>
                    </article>
                    <article class="advantages__item">
                        <a href="#gallery">
                            <picture><source srcset="img/advantages/advantages2.webp" type="image/webp"><img class="advantages__cart" src="img/advantages/advantages2.jpg" alt="cart"></picture>
                            <span class="advantages__number">2</span>
                            <span class="advantages__cart-title">Современные тренажеры
                                на все гурппы мышц</span>
                        </a>
                    </article>
                    <article class="advantages__item">
                        <picture><source srcset="img/advantages/advantages3.webp" type="image/webp"><img class="advantages__cart" src="img/advantages/advantages3.jpg" alt="cart"></picture>
                        <span class="advantages__number">3</span>
                        <span class="advantages__cart-title">Круглосуточный
                            режим работы</span>
                    </article>
                    <article class="advantages__item">
                        <a target="_blank" href="https://www.google.com/maps/place/ул.+Гагарина,+10,+Омск,+Омская+обл.,+644024/data=!4m2!3m1!1s0x43aafe1a80e84ef1:0x73ed6f7fab8d72ee?sa=X&ved=2ahUKEwjw96uE7Z_2AhU-AxAIHW7bAvMQ8gF6BAgaEAE">
                            <picture><source srcset="img/advantages/advantages4.webp" type="image/webp"><img class="advantages__cart" src="img/advantages/advantages4.jpg" alt="cart"></picture>
                            <span class="advantages__number">4</span>
                            <span class="advantages__cart-title">Транспортная доступность</span>
                        </a>
                    </article>
                    <article class="advantages__item">
                        <picture><source srcset="img/advantages/advantages5.webp" type="image/webp"><img class="advantages__cart" src="img/advantages/advantages5.jpg" alt="cart"></picture>
                        <span class="advantages__number">5</span>
                        <span class="advantages__cart-title">Народные цены
                            доступные каждому</span>
                    </article>
                    <article class="advantages__item">
                        <picture><source srcset="img/advantages/advantages6.webp" type="image/webp"><img class="advantages__cart" src="img/advantages/advantages6.jpg" alt="cart"></picture>
                        <span class="advantages__number">6</span>
                        <span class="advantages__cart-title">Большая просторная зона для воркаута</span>
                    </article>
                </div>
            </div>
        </section>

        <section id="gallery" class="gallery">
            <div class="gallery__container container">
                <h2 class="gallery__title title">
                    Галерея
                </h2>
                <div class="gallery__title-bg title-bg">Галерея
                </div>
                <div class="gallery__content content__section">
                    <div class="slider-for">
                    <?php foreach ($imgs as $img) { ?>
                        <div class="slider__item">
                            <picture><source srcset="<?= $img['img']?>.webp" type="image/webp"><img class="slider__img" src="<?= $img['img']?>.jpg" alt="gym"></picture>
                        </div>
                    <?php }?>
                    </div>
                    <div class="slider-nav">
                    <?php foreach ($imgs as $img) { ?>
                        <div class="slider__item">
                            <picture><source srcset="<?= $img['img']?>.webp" type="image/webp"><img class="slider__img" src="<?= $img['img']?>.jpg" alt="gym"></picture>
                        </div>
                    <?php }?>
                    </div>
                </div>
            </div>
        </section>
        <section id="certificates" class="certificates">
            <div class="certificates__container container">
                <h2 class="certificates__title title">
                    СЕРТИФИКАТЫ
                </h2>
                <div class="certificates__title-bg title-bg">СЕРТИФИКАТЫ</div>
                <div class="certificates__content content__section">
                    <?php foreach ($certificates as $certificate) { ?>
                        <div class="certificates__item">
                        <div class="certificates__icon _icon-Group"></div>
                        <div class="certificates__info">
                            <div class="certificates__name">
                                <?= $certificate['title']?>
                            </div>
                            <a class="certificates__link" href="<?= $certificate['link']?>" target="_blank">Посмотреть</a>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>
    </main>
    <div class="sign-up" id="sign-up">
        <a class="close-area" href="#"></a>
        <a class="close" href="#">X</a>
        <div class="sign-up__body">
            <div class="sign-up__content">
                <div class="sign-up__title title">Записаться</div>
                <form class="sign-up__form" id="sign-up__form" method="POST" action="components/addsub.php">
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Введите имя*">
                    </div>
                    <div class="form-group">
                        <input type="tel" name="tel" id="tel" placeholder="Введите номер телефона*">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Введите почту*">
                    </div>
                    <div class="form-group">
                        <input type="datetime" name="datetime" id="datetime" placeholder="Введите дату и время*">
                    </div>
                    <div class="cont_select_center form-group">
                        <div class="select_mate" data-mate-select="active">
                            <select name="adress" id="adress" onchange="" onclick="return false;" required>
                                <option value="1">Гагарина, 1</option>
                                <option value="2">Гагарина, 2</option>
                                <option value="3">Гагарина, 3</option>
                                <option value="4">Гагарина, 4</option>
                            </select>
                            <span class="selecionado_opcion" onclick="open_select(this)"></span><span
                                onclick="open_select(this)" class="icon_select_mate"><svg fill="#ffffff" height="24"
                                    viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z" />
                                    <path d="M0-.75h24v24H0z" fill="none" />
                                </svg></span>
                            <div class="cont_list_select_mate">
                                <ul class="cont_select_int"> </ul>
                            </div>
                        </div>
                    </div>
                    <textarea class="massage" name="massage" id="massage" placeholder="Сообщение"></textarea>
                    <div class="assent form-group">
                        <input class="assent__checkbox" type="checkbox" name="assent" id="assent" required>
                        <label for="assent" class="assent__label"></label>
                        <span>Отправляя заявку Вы соглашаетесь с политикой конфиденциальности</span>
                    </div>
                    <input id="btn" class="submit" type="submit" value="Записаться">
                </form>
            </div>
            </div>
        </div>
    </div>
    <?php include __DIR__ . '/template/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/ajax.js"></script>
</body>

</html>