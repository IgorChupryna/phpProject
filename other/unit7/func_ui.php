<?php

function setPrintCookies($name, $value):void{
    setcookie("$name", "$value");
    echo "<br>";
    echo $_COOKIE["$name"];
}

function setSesAndStart($name, $value):void{
    session_start();
    $_SESSION["$name"] = "$value";
    echo "<br>";
    echo $_SESSION["$name"];
}
