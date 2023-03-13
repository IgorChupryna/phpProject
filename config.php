<?php

$title = "Title site";
$description = "Description site";
$YEAR = date("Y");

$url = "https://baconipsum.com/api/?type=all-meat&paras=3&start-with-lorem=1";

$content = file_get_contents($url);


$config = array(
    "header" => array(
        "menu" => array(
            "title" => "More info...",
            "link" => "./info.php",
        )
    ),

    "footer" => array(
        0 => $title,
        1 => $YEAR)
);
