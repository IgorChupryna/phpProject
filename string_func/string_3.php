<!--
Завдання 1:
Створіть масив, який містить наступні властивості: ім'я (name), прізвище (surname), вік (age) та середній бал (avg_grade).
Після цього серіалізуйте його. Відобразьте готовий результат на єкран. З серіалізованої строки зробіть unserialize та виведіть результат на екран.

Завдання 2:
Створіть рядок "I love PHP". Використовуючи функцію explode, розбийте цей рядок на окремі слова та виведіть їх на екран.

Завдання 3:
Створіть рядок "i love php". Використовуючи функцію ucwords, змініть першу літеру кожного слова на велику та виведіть рядок на екран.

Завдання 4:
Створіть рядок " i love php ". Використовуючи функцію trim, видаліть пробіли в початку та в кінці рядка та виведіть рядок на екран.

Завдання 5:
Створіть рядок "i love php". Використовуючи функцію substr, виведіть на екран слово "php".

Завдання 6:
Створіть рядок "Hello my world". Використовуючи функцію substr, виведіть на екран слова "Hello world". Слово "my" потрібно замінити на порожнечу.

Завдання 7:
Розбити рядок "I love PHP" за допомогою циклу for.

Завдання 8:
Створіть рядок "i love php". Використовуючи функцію substr, виведіть на екран слово "love".
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>String func. Unit 3</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>

<?php

include_once 'func_2.php';

//Створіть масив, який містить наступні властивості: ім'я (name), прізвище (surname), вік (age) та середній бал (avg_grade).
//Після цього серіалізуйте його. Відобразьте готовий результат на єкран. З серіалізованої строки зробіть unserialize та виведіть результат на екран.
echo '<br>';
$arr = array(
    "name" => "Ann",
    "surname" => "Apple",
    "age" => "30",
    "avg_grade" => "95"
);

showArr($arr);
$unArr = showAndGetSerializableArr($arr);
echo '<br>';
echo $unArr;
//? MIXED
$arr = showAndGetUnserializableArr($unArr);
echo '<br>';
showArr($arr);
echo '<br>';

//Створіть рядок "I love PHP". Використовуючи функцію explode, розбийте цей рядок на окремі слова та виведіть їх на екран.
echo '<br>';
$str = "I love PHP";
$arr = explode(" ", $str);
showArr($arr);
echo '<br>';

//Створіть рядок "i love php". Використовуючи функцію ucwords, змініть першу літеру кожного слова на велику та виведіть рядок на екран.
echo '<br>';
$str = "i love php";
$newStr = ucwords($str);
echo $newStr;
echo '<br>';

//Створіть рядок " i love php ". Використовуючи функцію trim, видаліть пробіли в початку та в кінці рядка та виведіть рядок на екран.
echo '<br>';
$str = " i love php ";
$newStr = trim($str);
echo $newStr;
echo '<br>';

//Створіть рядок "i love php". Використовуючи функцію substr, виведіть на екран слово "php".
echo '<br>';
$str = "i love php";
$newStr = substr($str, -3);
echo $newStr;
echo '<br>';

//Створіть рядок "Hello my world". Використовуючи функцію substr, виведіть на екран слова "Hello world". Слово "my" потрібно замінити на порожнечу.
echo '<br>';
$str = "Hello my world";
$newStr = substr($str, 0,6).substr($str, -5);
echo $newStr;
echo '<br>';

//Розбити рядок "I love PHP" за допомогою циклу for.
echo '<br>';
$str = "I love PHP";
showVerticalStr($str);
echo '<br>';


//Створіть рядок "i love php". Використовуючи функцію substr, виведіть на екран слово "love".
echo '<br>';
$str = "i love php";
$newStr = substr($str,2,4);
echo $newStr;
echo '<br>';

?>
</body>
</html>