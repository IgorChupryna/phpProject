<?php

function showArr(array $arr): void
{
    if (count($arr) == 0) echo "Empty array";

    $strArr = "[";
    foreach ($arr as $key => $item) {
        $strArr .= $key . ":" . $item . ",";
    }

    $strArr = substr_replace($strArr, "]", -1);
//    $strArr = trim($strArr, ",");
//    $strArr .= "]";
    echo $strArr;
}

//Створіть масив, який містить наступні властивості: ім'я (name), прізвище (surname), вік (age) та середній бал (avg_grade).
//Після цього серіалізуйте його. Відобразьте готовий результат на єкран. З серіалізованої строки зробіть unserialize та виведіть результат на екран.
function showAndGetSerializableArr(array $arr): string|false
{
    if (count($arr) == 0) return false;
    return serialize($arr);
}

function showAndGetUnserializableArr(string $unArr): mixed
{
    if (empty($unArr)) return false;
    return unserialize($unArr);
}

function showVerticalStr(string $str):void
{
    if (empty($str)) echo "Empty string";

    for ($i=0;$i<strlen($str);$i++){
        echo $str[$i]."<br>";
    }
}
