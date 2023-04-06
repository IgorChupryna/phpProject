<!--
1. Зробити форму в якій будуть два інпут поля з типом текст. Одне поле з атрибутом name email і login. Відправка форми
відбувається за допомогою метода get. Відправка відбувається на сторінку з якої надсилаються дані. Відобразити усі
надіслані дані за допомогою циклу.<br>
-->
<html lang="en">
<body>
Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
<?php

//var_dump($_GET);

foreach ($_GET as $val){
    echo "<br>";
    echo $val;
}
?>
</body>
</html>
