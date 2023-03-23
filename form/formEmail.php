<html lang="en">
<body>

<form action="#" method="get">
    <label>Login:<input type="text" name="name"></label><br>
    <label>Email:<input type="text" name="email"></label><br>
    <input type="submit">
</form>

<?php

if (!empty($_GET["name"]) && isset($_GET["email"])) {
    ?>
    Welcome <?= $_GET["name"];?><br>
    Your email address is: <?= $_GET["email"];?>
    <?php
    foreach ($_GET as $val) {
        echo "<br>";
        echo $val;
    }
}
?>

</body>
</html>