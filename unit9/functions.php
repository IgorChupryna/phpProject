<!--
-->


<?php

include 'func_func.php';

myFunc();

calc(20, 30);
calc(20, 30, 5);

printStr("new str");
printHelloStr("Vasya");

printMuchStr('a', 1, 2, 43, 56, 'ff');

mergeTwoArrays([1, 2, 3, 4, 5, 6], [7, 8, 9, 10, 11, 12]);

echo '<div><a style="margin-right: 5px" href="' . goToLink('info', 'php', 'http://localhost:81/phpProject/') . '">info' . '</a></div>';


$var = 200;
echo $var;
echo getGlobalVar();
echo $var;

echo "<br>";

for ($i = 0; $i < 10; $i++) {
    echo counter();
}
echo '<br>';
print_r(creArr(3, 1, 2, 3, 4));
echo '<br>';
var_dump(creArr(3, 1, 2, 3, 4));
echo '<br>';

echo sumArr([1, 2, 4, 8]);

$var = 'dynamicFunc';
echo '<br>';
echo $var('Home', 10);


$sum = function (int $a, int $b):int {
    return $a + $b;
};
echo '<br>';
echo $sum(10, 15);