<?php
require 'include/db.php';

define('SITE_DIR', '/shop');

// localhost/shop/page
$url = explode("?", $_SERVER["REQUEST_URI"]);
$url = urldecode($url[0]);
$url = explode("/",$url);
// адреса страниц админки например
$count = count($url);
$isAdmin = false;
// localhost/shop/admin/page
if($count >= 3)
{
    if($url[$count - 2] == 'admin')
    {
        $isAdmin = true;
    }
}
else
{
    // localhost/shop/admin
    if($url[$count - 1] == 'admin')
    {
        $isAdmin = true;
    }
}
$url = array_pop($url);

$pagelink = $url == "" ? "index": $url;

$pagelink = $isAdmin ? "admin/$pagelink" : $pagelink;

if(!file_exists("contents/$pagelink.php"))
    $pagelink = "404";

switch($pagelink)
{
    case 'admin/index':
        // главная страница админа
        break;
    case "index":
        // в папке bin загрузка данных (логика)
        require 'bin/index.php';
        break;
    
    case "cart":
        // в папке bin загрузка данных (логика)
        // require 'bin/cart.php';
        $title = "Карзина";
        break;

    case "contacts":
        $title = "Контакты";
        break;

    case "dostavka_i_oplata":
        $title = "Доставка и оплата";
        break;

    case "feedback":
        $title = "Отзывы";
        break;

    case "login":
        $title = "Авторизация";
        break;

    case "news":
        $title = "Новости";
        break;

    case "o_nas":
        $title = "О нас";
        break;

    case "registration":
        $title = "Регистрация";
        break;

    case "hot-dish":
        $title = "Горячее блюдо";
        break;

    case "second-course":
        $title = "Второе блюдо";
        break;

    case "garnish":
        $title = "Гарниры";
        break;

    case "cold-snacks":
        $title = "Холодные закуски";
        break;

    case "salads":
        $title = "Салаты";
        break;

    case "beverages":
        $title = "Напитки";
        break;

    case "baking-bread":
        $title = "Выпечка, Хлеб";
        break;

    case "blyudo-na-zakaz":
        $title = "Блюдо на заказ";
        break;

    default:
        $title = "Ошибка";
}

if($isAdmin)
    require "template/admin/header.php";
else
    require "template/default/header.php";

require "contents/$pagelink.php";

if($isAdmin)
    require "template/admin/footer.php";
else
    require "template/default/footer.php";
?>
