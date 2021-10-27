<?php
define('DB_HOST','localhost'); // host db
define('DB_USER','root'); // user db
define('DB_PASSWORD',''); //password db
define('DB_NAME','shop'); //name db

$mysql = @new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if ($mysql -> connect_errno) exit('Ошибка подключение к БД');
$mysql -> set_charset('utf8');
$mysql -> close();
?>