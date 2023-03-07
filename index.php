<!DOCTYPE html>
<html>
<head>
    <title>PHP-скрипт</title>
    <meta charset='utf-8'>
</head>
<body>

<!--

-->
<?php
echo "<br>";

for ($i = 2; $i < 100; $i++) {
    for ($j = 2; $j < $i; $j++) {
        if (($i % $j) != 0) {
            continue;
        } else {
            $flag = true;
            break;
        }
    }
    if (!$flag) echo "$i ";
    $flag = false;
}
//
//$content = file_get_contents('https://mysite.com') OR exit('Помилка');
//echo $content;

?>
</body>
</html>