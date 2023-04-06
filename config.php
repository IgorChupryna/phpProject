<!--

Завдання:
 Створити файл index.php в якому підключити файл header.php (Шапка сайту) content.php (Контент самої сторінки) footer.php (низ сайту) .
Також в index.php підключити файл config.php в якому створити зміну з назвою 'title' в якій буде назва сайту і створити зміну з назвою 'description' в якій буде опис сайту.
Також створити зміну з назвою 'config' в якій буде масив з ключами 'header', 'footer'.
Ключ 'header' буде мати в собі ключ з назвою 'menu' і по цьому ключу буде декілька масивів,
які будуть мати в собі ключ з назвою 'title' з описом посилання і ключом 'link' в якому буде адреса посилання на іншу сторінку.
У файлі header.php через foreach вивести усі значення з масиву 'menu' в елементі html 'ul' де вивести елемент 'li' який має посилання на лінк де значення 'title' буде назва посилання ,
а 'link' буде посиланням.
 Ключ 'footer' буде мати в собі масив з ключами де за першим нульовим індесом буде значення з змінної 'title',
а другим індексом буде виступати текст 'year' з теперішнім роком. За допомогою циклу for вивести усі значення з масиву у файлі footer.php .
Створити зміну 'content' з текстом рибою 'Lorem Ipsum' на три абзаца. Вивести значення у файлі content.php .
Всі зміни робити через github і готовий результат завантажити на безкоштовний хостинг.
-->
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
            ),
        )
    ),

    "footer" => array(
        0 => $title,
        1 => $YEAR
    )
);
