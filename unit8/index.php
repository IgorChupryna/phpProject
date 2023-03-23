<!DOCTYPE html>
<html>
<head>
    <title>Unit_7</title>
    <meta charset='utf-8'>
</head>
<body>
<!--
Завдання:
https://php.apartner.pro/GIT.html (це корисно знати)
https://php.apartner.pro/Urok-6.html
https://php.apartner.pro/Urok-7.html

1) З минулого уроку взяти обєднаний масив за допомогою array_merge. Перевірити чи існує значення ключа з індексом 1, 3,
5, 8, 10. Якщо існує вивести його значення.
2) За допомогою array_search знайти ключ з індексом 2, 7. 9 і вивести інформацію чи ключ існує. Інакше вивести помилку.
3) Перевірити чи існує ключ 2, 4 в масиві за допомогою Array_key_exists
4) створити кукі з назвою name і значенням admin. Вивести її.
5) Розпочати сесію. створити сесію з назвою config і значенням settings. Вивести її.
6) видали створену сесію і кукі. Спробувати отримати значення з видалених сесій і кукі.
7) видалити усі сесії
8) спробувати налаштувати Variables_order в php.ini ,щоб певний супермасив не був доступний
-->
<?php

include 'config.php';

include 'header.php';

include 'content.php';

require 'footer.php';

?>
</body>
</html>