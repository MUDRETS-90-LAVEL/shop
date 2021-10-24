<?php

$url = explode("?", $_SERVER["REQUEST_URI"]);
$url = urldecode($url[0]);
$url = explode("/",$url);
$url = array_pop($url);

$pagelink = $url == "" ? "index": $url;

if(!file_exists("contents/$pagelink.php"))
    $pagelink = "404";

switch($pagelink)
{
    case "index":
        $title = "Главная страница";
        break;
    
    case "cart":
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

    default:
        $title = "Ошибка";
}

require "template/header.php";
require "contents/$pagelink.php";
require "template/footer.php";