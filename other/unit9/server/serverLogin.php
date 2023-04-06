<!--
Створити форму з прихованим полем і ключом name де значення security.
Також створити поле з типом текст і name login значенням по замовчуванням користувач.
Створити поле для вводу пароля з типом password.
Відправляти усі дані на сторінку form_data.php , використовувати тип передачі пост.
На сторінці form_data виловити усі введенні дані і відобразити їх.

Якщо якесь поле буде порожнє то повернутися на попередню сторінку
і залишити введеними дані з полів логін і security й відобразити текст під кожним полем ,
 що це поле обовязкове для заповнення.
  За бажанням можна й інші додаткові поля добавити (наприклад телефон, адреса).<br>
-->
<html lang="en">
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your password is: <?php echo $_POST["pass"]; ?>

<?php
foreach ($_POST as $val) {
    echo "<br>";
    if (empty($val)) {
        $tmpPass = empty($_POST['pass']) ? 'empty' : $_POST['pass'];
        $tmpName = empty($_POST['name']) ? 'empty' : $_POST['name'];
        $tmpSec = empty($_POST['security']) ? 'empty' : $_POST['security'];

        header("location: ../form/formLogin.php?name=$tmpName&pass=$tmpPass&security=$tmpSec");
    }
    echo $val;
}
?>

</body>
</html>