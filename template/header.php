<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script src="https://use.fontawesome.com/74c2bb2b5e.js"></script>
    <link rel="icon" href="./logo.png" type="image/png">
    <title><?= $title?></title>
</head>
<body>
<header>
    <div class="contener">
        <div class="header-top">
            <ul>
                <li><a href="/shop">Главаная</a></li>
                <li><a href="o_nas">О нас</a></li>
                <li><a href="dostavka_i_oplata">Доставка и оплата</a></li>
                <li><a href="feedback">Отзывы</a></li>
                <li><a href="news">Новости</a></li>
                <li><a href="contacts">Контакты</a></li>
            </ul>
            <div class="cart">
                <a href="cart"><i class="fa fa-shopping-cart fa-f2x" aria-hidden="true"></i></a>
                <a href="cart"><span>1450</span> руб.</a>
            </div>
            <div class="cabinet">
                <a href=""><i class="fa fa-lock" aria-hidden="true"></i></a>
                <a href="login">Вход</a>
                <a href="registration">Регистрация</a>
            </div>
        </div>
        <div class="header-mid">
            <div class="logo">
                <div class="header-mid-icon">
                    <a href="index"><img src="./img/logo.png" alt="logo"></a>
                </div>
                <div class="text">
                    <p><strong>Экспресс</strong></p>
                    <p><span>Закусочная</span></p>
                </div>
                <div class="header-mid-icon header-icon">
                    <a href="index"><img src="./img/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="adress">
                <img src="./img/addres.png" alt="">
                <p>Наш адресс: <br> <span>Елецкий район п.Капани 10a</span></p>
            </div>
            <div class="email">
                <a href="mailto:express@info.com"><img src="./img/mail.png" alt="mail"></a>
                <p>Напишите нам: <br> <a href="mailto:express@info.com">express@info.com</a></p>
            </div>
            <div class="tel">
                <a href="tel:+79205062623"><img src="./img/phone.png" alt="tel"></a>
                <p>Позвоните нам:<br>
                <a href="tel:+79205062623">+7 920 506 26 23</a></p>
            </div>
        </div>
        <div class="header-button">
            <div class="header-button-left">
                <ul>
                    <li><a href="hot-dish">Первое блюдо</a></li>
                    <li><a href="second-course">Второе блюдо</a></li>
                    <li><a href="garnish">Гарниры</a></li>
                    <li><a href="cold-snacks">Холодные закуски</a></li>
                    <li><a href="salads">Салаты</a></li>
                    <li><a href="beverages">Напитки</a></li>
                    <li><a href="baking-bread">Выпечка,Хлеб</a></li>
                    <li><a href="blyudo-na-zakaz">Блюдо на заказ</a></li>
                </ul>
            </div>
            <div class="header-button-right">
                <input type="search" placeholder="Поиск по сайту">
                <a href=""><img src="./img/search.png" alt="search"></a>
            </div>
        </div>
    </div>



     

</header>
