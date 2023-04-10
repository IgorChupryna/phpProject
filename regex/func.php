<?php

function isValidEmail($email): false|int
{
    return preg_match("/^[a-z0-9_\-.]+@[a-z0-9_^.]+\.[a-z]{1,6}$/ui", $email);
}

//$date="2012-09-12";
function isDateValid($date): false|int
{

    return preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])\/(0[1-9]|1[0-2])\/[0-9]{4}$/", $date);
}

function isTrueYears($date): void
{
    $diff = abs(strtotime($date) - strtotime(date('d/m/Y')));
    $years = floor($diff / (365*60*60*24));

    if($years >= 18)
        printf("Valid years! %d years, \n", $years);
    else
        printf("Not valid years! %d years, \n", $years);
    echo "<br>";
}