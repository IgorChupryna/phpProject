<?php

//Напишіть функцію PHP, яка приймає рядок і повертає той самий рядок, в якому всі літери будуть великими.

function strToUpperCase(string $str): string|false
{
    if (empty($str)) return false;
    return strtoupper($str);
}

////Напишіть функцію PHP, яка приймає два рядки, використовуючи функцію str_replace, замінює всі входження першого рядка на другий рядок в третьому рядку.
function strReplace(string $str1, string $str2, string $str3, &$count = false): string|false
{
    if (empty($str1) || empty($str2) || empty($str3)) return false;

    if (is_int($count))
        return str_replace($str1, $str2, $str3, $count);

    return str_replace($str1, $str2, $str3);
}

function strToLowerCase(string $str): string|false
{
    if (empty($str)) return false;
    return strtolower($str);
}

function getWordArrFromString(string $str): array|false
{
    if (empty($str)) return false;

    $tok = strtok($str, " ");
    $arr = [];
    while ($tok) {
        $arr[] = $tok;
        $tok = strtok(" ");
    }
    return $arr;
}

function getReplaceString(string $str1, string $str2): string|false
{
    if (empty($str1) || empty($str2)) return false;
    return strstr($str1, $str2);
}

function getStrFromArr(array $arr): string|false
{
    if (count($arr) == 0) return false;

    return join(";", $arr);
}