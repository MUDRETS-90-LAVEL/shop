<?php

$title = "Главная страница";
// загрузить данные из бд
$result = $mysql->query("SELECT name, link, img FROM categories;");

$categories = $result->fetch_all(MYSQLI_ASSOC);

unset($result);
