<!DOCTYPE html>
<html>
<head>
    <title>Unit_2</title>
    <meta charset='utf-8'>
</head>
<body>
<!--
Завдання
1) Оголосити змінні (integer, float, bolean, string, array, object, null) Перевірити їх тип і спробувати змінити їх тип.
2) Створити зміну з EOT і вивести значення її. Також повторити те , що було на уроці.
3) Оголошення константи, Перевірка існування, зробити динамічне ім’я константи, Зумовлені константи, Константи класу
-->
<?php
echo "Unit_2";
echo "<br>";
//1
$i_var = 123;
$f_var = 1.23456;
$b_var = true;
$s_var = "Hello, world!";
$a_var  = [1, 2];
$o_var = new ArrayObject();
$n_var = null;
echo $i_var;
echo "<br>";
echo $f_var;
echo "<br>";
echo $b_var;
echo "<br>";
echo $s_var;
echo "<br>";
echo $a_var[0]." ".$a_var[1];
echo "<br>";
echo $n_var;
echo "<br>";

var_dump($i_var);
var_dump($f_var);
var_dump($b_var);
var_dump($s_var);
var_dump($a_var);
var_dump($o_var);
var_dump($n_var);

$i_var.=$s_var;
echo $i_var;
echo "<br>";
var_dump($i_var);
//1
//2
$str = "Hello, world!";
$str = <<< 'EOT'
Доки не зустрінеться
мітка, можна писати все що завгодно $str
EOT;
echo $str;
//2
//3
echo "<br>";
define('NUM', 1);
const STR = 'Hello, world!';

echo NUM;
echo "<br>";
echo STR;
echo "<br>";

if (defined('STR')) echo "YES ".STR;
echo "<br>";
if (defined('NUM')) echo "YES ".NUM;
echo "<br>";

define("COLOR", 'red');
echo "<br>";
echo COLOR;
echo "<br>";
echo constant("COLOR");
echo "<br>";
echo __LINE__;
//3
?>
</body>
</html>