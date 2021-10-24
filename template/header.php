<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://use.fontawesome.com/74c2bb2b5e.js"></script>
    <title><?= $title?></title>
</head>
<body>
<header>
    <div class="contener">
        <div class="header-top">
            <ul>
                <li><a href="index">Главаная</a></li>
                <li><a href="o_nas">О нас</a></li>
                <li><a href="dostavka_i_oplata">Доставка и оплата</a></li>
                <li><a href="feedback">Отзывы</a></li>
                <li><a href="news">Новости</a></li>
                <li><a href="contacts">Контакты</a></li>
            </ul>
            <div class="cabinet">
                <a href="">Личный кабинет</a>
            </div>
            <div class="cart">
                <a href="cart"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
                 <label><span>1450</span> руб.</label>
            </div>
        </div>
        <div class="header-mid">
            <div class="logo">
                <a href="index">
                    <i>logo</i>
                    <span>Экспресс</span>
                    <p>Закусочная</p>
                    <i>logo</i>
                </a>
            </div>
            <div class="adress">
                <i>а</i>
                <p>Наш адресс: <span>Елецкий район п.Капани 10a</span></p>
            </div>
            <div class="email">
                <i>п</i>
                <p>Напишите нам: <a href="mailto:express@info.com">express@info.com</a></p>
            </div>
            <div class="tel">
                <i>t</i>
                <p>Позвоните нам:</p>
                <a href="tel:+79205062623">+7 920 506 26 23</a>
            </div>
        </div>
        <div class="header-button"></div>
    </div>
</header>
