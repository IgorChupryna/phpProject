<!--
Завдання:
https://php.apartner.pro/GIT.html (це корисно знати)
https://php.apartner.pro/Urok-6.html
https://php.apartner.pro/Urok-7.html

4) створити кукі з назвою name і значенням admin. Вивести її.
5) Розпочати сесію. створити сесію з назвою config і значенням settings. Вивести її.
6) видали створену сесію і кукі. Спробувати отримати значення з видалених сесій і кукі.
7) видалити усі сесії
8) спробувати налаштувати Variables_order в php.ini ,щоб певний супермасив не був доступний

Sets the order of the EGPCS (Environment, Get, Post, Cookie, and Server) variable parsing.
For example, if variables_order is set to "SP" then PHP will create the superglobals $_SERVER and $_POST,
but not create $_ENV, $_GET, and $_COOKIE. Setting to "" means no superglobals will be set.
-->
<?php
include 'func_ui.php';

echo 'Desc page';

setPrintCookies('name','admin');

setSesAndStart('config','settings');

unset($_COOKIE['name']);

unset($_SESSION['config']);

echo $_COOKIE['name'];
echo '<br>';


echo '<br>';
echo $_SESSION['config'];

session_destroy();
