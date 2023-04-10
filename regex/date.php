<!--
Задача 2:
Створіть форму для введення дати народження користувача у форматі ДД/ММ/РРРР.
Напишіть скрипт на PHP, який перевірятиме, чи введена дата має вірний формат та чи є користувач повнолітнім (18 років чи більше).
Використайте функцію preg_match() для перевірки формату дати.

-->
<?php
include_once 'func.php';

if (isset($_POST['submit'])) {
    $date = $_POST['date'];

    if (isDateValid($date))
        echo "Date $date valid";
    else
        echo "Date $date not valid";

    isTrueYears($date);
}
?>

<!DOCTYPE html>
<head>
    <title>Form date</title>
</head>
<body>

<form action="" method="post">
    Date: <label>
        <input type="text" name="date">
    </label><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
