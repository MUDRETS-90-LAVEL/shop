<?php

$title = "Второе блюдо";
// загрузить данные из бд
$result = $mysql->query("SELECT p.* FROM products AS p JOIN categories AS c ON c.id = p.id_category WHERE c.name='Второе блюдо';");
// $result = $mysql->query("SELECT p.* FROM products AS p WHERE p.id_category=1;");

$products = $result->fetch_all(MYSQLI_ASSOC);

unset($result);
