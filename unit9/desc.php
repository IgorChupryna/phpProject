<!--

-->
<?php
include 'func_ui.php';

echo 'Desc page';

setPrintCookies('name','admin');

setSesAndStart('config','settings');

unset($_COOKIE['name']);

unset($_SESSION['config']);

echo $_COOKIE['name'];
echo '<br>';


echo '<br>';
echo $_SESSION['config'];

session_destroy();

