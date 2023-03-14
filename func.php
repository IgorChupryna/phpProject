<?php
function printNumArr($arr): void
{
    echo '</br>';
    $res = "[";
    for ($i = 0; $i < count($arr); $i++) {
        if ($i === count($arr) - 1) $res .= $arr[$i];
        else
            $res .= $arr[$i] . ",";
    }
    $res .= "]";
    echo $res;
}

function printElIfExistArrayEl($arr, $i): void
{
    echo "<br>";
    try {
        echo $arr[$i];
    } catch (Exception $e) {
        echo 'Caught exception: ', $e->getMessage(), "\n";
    }
}

function isElExist($arr, $i): void
{
    echo "<br>";
    echo isset($arr[$i]) ? "Елемент \$arr[$i] існує" : "Елемент \$arr[$i] не існує";
}


function printKeyIfExistArrayKey($arr, $k): void
{
    echo "<br>";
    echo Array_key_exists($k, $arr) ? $arr[$k] : "Not exist \$arr[$k]";
}


function findEl($arr, $i): void
{
    echo "<br>";
    echo array_search($i, $arr) ? "Key exist $i" : "Error. Not exist";
}