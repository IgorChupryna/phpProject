<!--
12) Напишіть функцію PHP, яка прийматиме два параметри: строку тексту та число. Функція повинна згенерувати динамічне
ім'я, яке буде містити слово "func" та послідовность символів, яку ми передали.
-->

<?php

function myFunc(): void
{
    echo "my func";
}

function calc($param1, $param2, $param3 = 10): void
{
    echo '<br>';
    $res = ($param1 + $param2) / $param3;
    echo "(" . $param1 . "+" . $param2 . ")/" . $param3 . "=" . $res;
}

function printStr($str): void
{
    echo "<br>";
    echo $str;
}

function printHelloStr($str): void
{
    echo "<br>";
    echo "Hello " . $str;
}

function printMuchStr(...$arr): void
{
    echo "<br>";
    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . " ";
    }
}

function mergeTwoArrays(array $arr1, array $arr2): void
{
    $newArr = array_merge($arr1, $arr2);
    echo "<br>";
    echo "[ ";
    foreach ($newArr as $el) {
        echo $el . " ";
    }
    echo "]";
}

function goToLink(string $string, string $string1, string $string2): string
{
    echo "<br>";
    return $string2 . $string . '.' . $string1;
}

function getGlobalVar(): int
{
    global $var;
    $var = 100;

    return $var;
}

function counter(): int
{
    static $counter = 0;
    if ($counter === 6) $counter = 0;
    return ++$counter;
}

function creArr($el1, $el2, $el3, $el4, $el5): array
{
    return [$el1, $el2, $el3, $el4, $el5];
}

function sumArr($arr)
{
    $sum = 0;
    foreach ($arr as $el) {
        if (is_array($el)) {
            $sum+= sumArr($el);
        } else {
            $sum+= $el;
        }
    }
    return $sum;
}

function dynamicFunc(string $str,int $num): string
{
    return 'func'.$str.$num;
}

