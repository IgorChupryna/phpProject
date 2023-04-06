<!--
Завдання

1) Визначити довжину рядка 'The length of the string is length'
2) Видалення символів екранування з цього тесту 'This is a \'test\' string.'
3) Визначення кількості символів до першого співпадіння з словом word з цього тексту 'Hello, world!'
4) Порівняння двох рядків один 'Hello' і 'hello!'
5) Пошук підрядка 'world' в рядку "Hello, world!"
6) Форматування рядка за допомогою sprintf(). В рядку "My name is John, I'm 30 years old, and my height is 1.75 meters."
зробити заміну в імені , кількість років і зріст.
7) Визначити ,що слова вимовляються приблизно однаково Smith , Smyth, John, join
8) Заміни символів, які можуть бути сприйняті як HTML-теги з цієї строки
<script>alert('test');</script>

-->

<?php

//Визначити довжину рядка 'The length of the string is length'
echo strlen('The length of the string is length');
echo '<br>';
echo mb_strlen('Визначити довжину рядка');
echo '<br>';
//Видалення символів екранування з цього тесту 'This is a \'test\' string.'
$text = 'This is a \'test\' string.';
echo $text;
echo stripslashes($text);
//Визначення кількості символів до першого співпадіння з словом word з цього тексту 'Hello, world!'
$text = 'Hello, world!';
echo '<br>';
echo mb_strlen(strchr($text, 'world', true));
//Порівняння двох рядків один 'Hello' і 'hello!'
var_dump(strcmp('Hello', 'hello!'));
echo strcmp('Hello', 'hello!');

//Пошук підрядка 'world' в рядку "Hello, world!"
$full_text = "Hello, world!";
$res = strchr($full_text, 'world');

var_dump($res);
//Форматування рядка за допомогою sprintf(). В рядку "My name is John, I'm 30 years old, and my height is 1.75 meters."
//зробити заміну в імені , кількість років і зріст.
$text = "My name is %01s, I'm %02d years old, and my height is %03.02f meters.";
$name = 'Ihor';
$age = '35';
$height = '1.85';

$res = sprintf($text, $name, $age, $height);
var_dump($res);

//Визначити ,що слова вимовляються приблизно однаково Smith , Smyth, John, Join
echo '<br>';
echo soundex('Smyth');
echo '<br>';
echo soundex('John');
echo '<br>';
echo soundex('Join');
echo '<br>';

echo soundex('Smith') == soundex('Smyth') ? 'equal' : 'not equal';
echo soundex('John') == soundex('Join') ? 'equal' : 'not equal';

//Заміни символів, які можуть бути сприйняті як HTML-теги з цієї строки <script>alert('test');</script>

$str = "<script>alert('test');</script>";

echo htmlspecialchars($str);


var_dump(strrpos('1hello helloworld', 'hello'));
