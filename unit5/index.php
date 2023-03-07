<!DOCTYPE html>
<html>
<head>
    <title>Unit_1</title>
    <meta charset='utf-8'>
</head>
<body>
<!--
Завдання:
1) Скористатись на практиці циклами: Цикл While, Цикл do ... while, Цикл For, Foreach
2) Підключити додатковий файл через include, require_once (Наприклад зробити шапку сторінки і низ за допомогою підключених файлів) Структуру HTML для файлів можна взяти тут https://www.w3schools.com/tags/tag_head.asp
3) Пройтись по навченому матеріалові
-->

<?php
include 'header.php';
echo "Unit_5";
echo "<br>";
$arr = [
    'first'  => '1',
    'second' => '2',
    'third'  => '3'
];
foreach ($arr as $index => $val) {
    echo $index . ' = '. $val;
}

require_once 'footer.php';
?>
</body>
</html>