<!--
Розпарсити дані з цієї адреси https://name:mypass@www.apartner.pro/uploads/index.php?id=98&success=ok#test:443 за
допомогою циклу і switch<br>
-->
<?php

$url = 'https://name:mypass@www.apartner.pro/uploads/index.php?id=98&success=ok#test:443';
$arr = parse_url($url);
echo '<pre>';

foreach ($arr as $key => $el){
    echo '<br>';
    switch ($key){
        case PHP_URL_SCHEME:
            echo(parse_url($url, PHP_URL_SCHEME));
            break;
        case 'host':
            echo(parse_url($url, PHP_URL_USER));
            break;
        case 'user':
            echo(parse_url($url, PHP_URL_PASS));
            break;
        case 'pass':
            echo(parse_url($url, PHP_URL_HOST));
            break;
        case 'path':
            echo(parse_url($url, PHP_URL_PATH));
            break;
        case 'port':
            echo(parse_url($url, PHP_URL_PORT));
            break;
        case 'query':
            echo(parse_url($url, PHP_URL_QUERY));
            break;
        case 'fragment':
            echo(parse_url($url, PHP_URL_FRAGMENT));
            break;
    }
}

echo '<pre>';