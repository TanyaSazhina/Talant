<?php
include 'components/connection.php';
$plan_obj = mysqli_query($conn,'SELECT * FROM `plans` WHERE id =' . $_REQUEST['id'] ?? 0);
$plan = mysqli_fetch_assoc($plan_obj);
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
    <div class="buy">
        <a class="close-area" href="plans.php"></a>
        <a class="close" href="plans.php">X</a>
        <div class="buy__body">
            <div class="buy__content">
                <div class="buy__title title">Оформление</div>
                <form class="buy__form" id="buy__form" method="POST" action="components/order.php">
                    <div class="form-group">
                        <input type="text" name="name" id="name" placeholder="Введите имя*">
                    </div>
                    <div class="form-group">
                        <input type="tel" name="tel" id="tel" placeholder="Введите номер телефона*">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" placeholder="Введите почту*">
                    </div>
                    <div class="cont_select_center form-group">
                        <div class="select_mate" data-mate-select="active">
                            <select name="adress" id="adress" onchange="" onclick="return false;" required>
                                <option value="Гагарина, 1">Гагарина, 1</option>
                                <option value="Гагарина, 2">Гагарина, 2</option>
                                <option value="Гагарина, 3">Гагарина, 3</option>
                                <option value="Гагарина, 4">Гагарина, 4</option>
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
                    <div class="buy__methods">
                        <h3 class="buy__methods-title">Способ оплаты</h3>
                        <div class="buy__methods-content">
                            <div class="buy__methods-item method">
                                <div class="method__title">
                                    <input class="cash" type="radio" name="method" value="cash" id="cash" checked><label
                                        for="cash">Наличными или по карте
                                        при получении</label>
                                </div>
                            </div>
                            <div class="buy__methods-item method">
                                <div class="method__title">
                                    <input class="card" type="radio" name="method" value="card" id="card" req><label
                                        for="card">По
                                        карте онлайн</label>
                                </div>
                                <div class="method__content method__card">
                                    <div class="card__content">
                                        <div class="card__date">
                                            <input type="text" class="card__date-input" id="cardNumber"
                                                name='cardNumber' min="16" max="16" placeholder="0000 0000 0000 0000"
                                                autocomplete="off" />
                                            <div class="card__date-item">
                                                <label for="cardDate" class="card__date-label">Истекает</label>
                                                <input type="text" class="card__date-input" id="cardDate"
                                                    placeholder="MM / YY" name="cardDate" autocomplete="off" />
                                            </div>
                                            <div class="card__date-item">
                                                <label for="password" class="card__date-label">CVV</label>
                                                <input type="password" class="card__date-input" min="3" max="3"
                                                    placeholder="***" name="password" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card__info">
                                        <h4 class="info__title">Абонимент</h4>
                                        <input type="text" style="display: none;" name="id_plan" id="id_plan" value="<?=$plan['id']?>">
                                        <div class="info__description"><?=$plan['name']?></div>
                                        <h4 class="info__title">Сумма</h4>
                                        <div class="info__description"><?=$plan['price']?></div>
                                        <h4 class="info__title">Дата получения</h4>
                                        <div class="info__description">21.09.21 - 23.09.21</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input id="btn" class="submit" type="submit" value="Заказать">
                </form> 
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>