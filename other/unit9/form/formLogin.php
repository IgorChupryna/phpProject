<!DOCTYPE HTML>
<html lang="en">
<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
    <title></title>
</head>
<body>

<?php
function getErrTag(): string
{
    return "<span class='error'>Required field</span>";
}

?>

<h2>Form Data</h2>

<form method="post" action="../server/serverLogin.php">
    <input type="hidden" name="security" value="secret">
    <label>Username:<input type="text" name="name"></label>
    <?php
    if (!empty($_GET['name']) && $_GET['name'] === 'empty') {
        echo getErrTag();
    }
    ?>

    <br><br>
    <label>Password:<input type="password" name="pass"></label>
    <?php

    if (!empty($_GET['pass']) && $_GET['name'] === 'empty') {
        echo getErrTag();
    }
    ?>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>


</body>
</html>