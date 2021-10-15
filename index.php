<?php

$url = explode("?", $_SERVER["REQUEST_URI"]);
$url = urldecode($url[0]);
$url = explode("/", $url);
$url = array_pop($url);

$pagelink = $url == "" ? "index" : $url;

if(!file_exists("config/$pagelink.php"))
    $pagelink = "404";


switch($pagelink)
{
    case "index":
        $title = "Главаня";
        break;
    case "o_nas":
        $title = "О нас";
        break;
    case "dostavka_oplata":
        $title = "Доставка и оплата";
        break;
    case "feedback":
        $title = "Отзывы";
        break;
    case "news":
        $title = "Новости";
        break;
    case "contacts":
        $title = "Контакты";
        break;
    case "login":
        $title = "Авторизация";
        break;
    case "reg":
        $title = "Регистрация";
        break;
    default:
        $title = "Ошибка";    
}

require "content/header.php";
require "config/$pagelink.php";
require "content/footer.php";
