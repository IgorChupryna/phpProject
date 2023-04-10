<!--
Задача 1:
Напишіть програму, яка перевірятиме, чи є введений користувачем рядок валідною електронною адресою.
Використайте функцію preg_match() для перевірки формату адреси.

Задача 2:
Створіть форму для введення дати народження користувача у форматі ДД/ММ/РРРР.
Напишіть скрипт на PHP, який перевірятиме, чи введена дата має вірний формат та чи є користувач повнолітнім (18 років чи більше).
Використайте функцію preg_match() для перевірки формату дати.

Задача 3:
Напишіть функцію на PHP, яка приймає рядок, який містить номер телефону в форматі +38(XXX)XXX-XXXX та повертає true, якщо номер валідний та false, якщо ні. Використайте функцію preg_match() для перевірки формату номера телефону.

Задача 4:
Створіть функцію на PHP, яка приймає рядок, який містить список електронних адрес у форматі "ім'я електронної пошти" <адреса електронної пошти>, розділених комою. Наприклад: "John Doe" john.doe@example.com, "Jane Smith" jane.smith@example.com. Функція повинна повертати масив імен користувачів. Використайте функцію preg_match_all() для отримання імен користувачів.

Задача 5:
Створіть функцію на PHP, яка приймає рядок, який містить список чисел, розділених комою. Наприклад: "10, 20, 30, 40, 50". Функція повинна повертати масив чисел, які є кратними трьом. Використайте функцію preg_match_all() для отримання чисел та перевірки їх кратності.

Задача 6:
Створіть функцію на PHP, яка приймає рядок, який містить HTML-код таблиці з даними про користувачів. Наприклад:

<table>
  <tr>
    <td>John Doe</td>
    <td>30</td>
    <td>john.doe@example.com</td>
  </tr>
  <tr>
    <td>Jane Smith</td>
    <td>25</td>
    <td>jane.smith@example.com</td>
  </tr>
</table>
Функція повинна повертати масив асоціативних масивів, де кожен масив містить ім'я, вік та адресу електронної пошти одного користувача. Використайте функцію preg_match_all() для отримання даних з таблиці.


Задача 7:
Створіть функцію на PHP, яка приймає рядок, який містить дату у форматі РРРР-ММ-ДД (наприклад, 2023-04-06) та повертає рядок у форматі ДД/ММ/РРРР (наприклад, 06/04/2023). Використайте функцію preg_replace() для заміни порядку чисел та роздільників.

Задача 8:
Створіть функцію на PHP, яка приймає рядок, який містить HTML-код зі списком елементів. Наприклад:

<ul>
  <li>Apple</li>
  <li>Banana</li>
  <li>Orange</li>
</ul>
Функція повинна повертати рядок, який містить тільки перший елемент списку. Використайте функцію preg_replace() для видалення решти елементів списку.

Задача 9:
Створіть функцію на PHP, яка приймає рядок, який містить HTML-код зі списком користувачів та їхніми електронними адресами. Наприклад:

<ul>
  <li>John Doe &lt;john.doe@example.com&gt;</li>
  <li>Jane Smith &lt;jane.smith@example.com&gt;</li>
</ul>
Функція повинна повертати рядок, який містить тільки електронні адреси користувачів, розділені комою. Використайте функцію preg_replace() для видалення імен користувачів та решти HTML-коду.

Задача 10:
Створіть функцію на PHP, яка приймає рядок, який містить список слів, розділених комою та пробілом. Наприклад: "apple, banana, orange, peach". Функція повинна повертати масив слів, які містять літеру "a". Використайте функцію preg_split() для розбиття рядка на масив та перевірки кожного слова на наявність літери "a".

Задача 11:
Створіть функцію на PHP, яка приймає рядок, який містить список URL-адрес. Наприклад: "http://example.com https://example.org http://example.net". Функція повинна повертати масив доменних імен, які мають розширення ".com". Використайте функцію preg_split() для розбиття рядка на масив, функцію parse_url() для отримання доменного імені та перевірку на розширення ".com".

Задача 12:
Створіть масив даних на PHP, який містить ім'я, прізвище та електронну адресу користувача. Наприклад:

$userData = array(
'firstName' => 'John',
'lastName' => 'Doe',
'email' => 'john.doe@example.com'
);

Використайте функцію json_encode() для перетворення масиву на рядок JSON.

Задача 13:
Створіть масив даних на PHP, який містить список користувачів та їхній інформації. Наприклад:

$users = array(
array(
'firstName' => 'John',
'lastName' => 'Doe',
'email' => 'john.doe@example.com'
),
array(
'firstName' => 'Jane',
'lastName' => 'Smith',
'email' => 'jane.smith@example.com'
)
);

Використайте функцію json_encode() для перетворення масиву на рядок JSON.

Задача 14:
Створіть масив даних на PHP, який містить список товарів та їхній інформації. Наприклад:

$products = array(
array(
'name' => 'Product 1',
'price' => 10.99,
'quantity' => 5
),
array(
'name' => 'Product 2',
'price' => 5.99,
'quantity' => 10
)
);

Використайте функцію json_encode() для перетворення масиву на рядок JSON.

Задача 15:
Створіть рядок JSON на PHP, який містить інформацію про користувача. Наприклад:

$userJson = '{"firstname":"john","lastname":"doe","email":"john.doe@example.com"}';

Використайте функцію json_decode() для перетворення рядка JSON на об'єкт або масив.

Задача 16:
Створіть рядок JSON на PHP, який містить список користувачів та їхній інформації. Наприклад:

$usersJson = '[{"firstname":"john","lastname":"doe","email":"john.doe@example.com"},{"firstname":"jane","lastname":"smith","email":"jane.smith"}]';

Використайте функцію json_decode() для перетворення рядка JSON на масив або об'єкт.

Задача 17:
Створіть рядок JSON на PHP, який містить інформацію про список товарів та їхній інформації. Наприклад:

$productsJson = '[{"name":"Product 1","price":10.99,"quantity":5},{"name":"Product 2","price":5.99,"quantity":10}]';

Використайте функцію json_decode() для перетворення рядка JSON на масив або об'єкт.



https://php.apartner.pro/Urok-13.html
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>String func. Unit 3</title>
    <link rel="stylesheet" href="./main.css">
</head>
<body>
<?php

include_once 'func.php';

echo '<br>';







echo '<br>';
?>
</body>
</html>