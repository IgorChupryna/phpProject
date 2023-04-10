<?php

$title = "Title site";
$description = "Description site";
$YEAR = date("Y");

$url = "https://baconipsum.com/api/?type=all-meat&paras=3&start-with-lorem=1";

//$content = file_get_contents($url);


$config = array(
    "header" => array(
        "menu" => array(
            array(
                "title" => "Unit 1. Variables",
                "link" => "./info.php"
            ),
            array(
                "title" => "Unit 2. Arrays",
                "link" => "./desc.php"
            ),
            array(
                "title" => "Unit 3. Functions",
                "link" => "./functions.php"
            ),
            array(
                "title" => "Form. Email",
                "link" => "./form/formEmail.php"
            ),
            array(
                "title" => "Form. Login",
                "link" => "./form/formLogin.php"
            ),
            array(
                "title" => "Parse. url",
                "link" => "./parseUrl.php"
            ),
            array(
                "title" => "File. upload_1",
                "link" => "./upload/file_upload.php"
            ),
            array(
                "title" => "File. upload_2",
                "link" => "./upload/file_upload_2.php"
            ),
            array(
                "title" => "String. func",
                "link" => "./string_func/functions.php"
            ), array(
                "title" => "String. func_2",
                "link" => "./string_func/string_2.php"
            ), array(
                "title" => "String. func_3",
                "link" => "./string_func/string_3.php"
            ), array(
                "title" => "Email. Regex expression",
                "link" => "./regex/email.php"
            ), array(
                "title" => "Date. Regex expression",
                "link" => "./regex/date.php"
            ), array(
                "title" => "Regex expression",
                "link" => "./regex/index.php"
            ),
        )
    ),

    "footer" => array(
        0 => $title,
        1 => $YEAR
    )
);
