<?php
$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Phasellus at nisi ut nibh pharetra volutpat.
Sed pharetra accumsan velit, ut tempus est.
Mauris eu vulputate dolor. Vivamus in risus lobortis, pulvinar lectus ac, gravida ipsum.
Quisque diam tortor, sodales nec justo in, efficitur tincidunt orci. Nulla facilisi. Aenean id iaculis augue. Aliquam erat volutpat.

Morbi sed justo dolor. Vestibulum condimentum, massa vitae vulputate dapibus, diam nisl ornare sapien,
vitae tincidunt tellus lorem sed metus. Integer laoreet consequat dui, ut vulputate nulla pharetra eu.
Nullam aliquam turpis a aliquam accumsan. Sed maximus nisi ac lectus hendrerit scelerisque.
Suspendisse vitae felis porta nunc vulputate commodo sit amet sit amet nisl.
Donec dignissim diam odio lorem, at rhoncus dui hendrerit sed.
Phasellus elementum condimentum lacus lorem, in tempus lectus.

Vestibulum id laoreet nibh. Nullam posuere, sem vitae placerat mattis, ante nulla fringilla lorem,
sed luctus erat nibh eu nunc. Donec eu nibh lorem. Donec posuere leo ut faucibus venenatis. Vivamus sed placerat dui.
Sed hendrerit risus in nisl rhoncus vestibulum. Nam et tincidunt magna. Orci varius natoque penatibus et magnis dis parturient montes,
nascetur ridiculus mus. Etiam in neque quis ante semper malesuada pulvinar eget diam. Cras vitae suscipit quam.

Vivamus feugiat libero sit amet nunc fringilla, vitae sodales tortor finibus. Duis risus magna, ultrices ac nunc ac,
imperdiet maximus dolor. Praesent vel leo augue. Fusce egestas tempor suscipit. Maecenas cursus lacinia tortor et gravida.
Etiam feugiat lorem eget magna venenatis, non vestibulum arcu cursus. Vivamus justo purus, posuere in velit vel,
ullamcorper consequat metus. Duis varius, erat auctor vestibulum porttitor, dui nisl hendrerit dui, eu aliquam velit risus sit amet dolor.
Vestibulum vel hendrerit massa. Aliquam ornare justo arcu, laoreet ullamcorper ligula ullamcorper sit amet.
Aenean tristique lacus vitae diam lacinia ullamcorper. Suspendisse porta ultrices nisl, at aliquet elit placerat id.
Duis sollicitudin dignissim mi, quis pretium sapien vulputate sed. Duis quis velit finibus, cursus sapien quis, faucibus nisl.

Donec aliquam eu orci at ultrices. Cras lobortis odio ligula, ut viverra magna scelerisque sed.
Nullam ultrices nisl lorem, id congue ipsum bibendum at. Phasellus sed orci vulputate,
tristique lectus nec, pellentesque nunc. Donec dictum sem in magna lacinia, sit amet congue augue luctus.
Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla non gravida velit.
Vestibulum mattis blandit congue. Cras tincidunt purus sed mauris tempus interdum nec vel nisi.
Praesent viverra, nisl eu sagittis finibus, nisl ipsum dignissim turpis, at cursus est dui quis sapien.
Fusce orci arcu, porta a auctor eu, mollis eget tortor. Nam id metus volutpat, ultrices massa at, blandit massa. Aliquam erat volutpat.";

?>

<!--
Завдання

1) Напишіть функцію PHP, яка приймає рядок і повертає той самий рядок, в якому всі літери будуть великими.

2) Напишіть функцію PHP, яка приймає два рядки, використовуючи функцію str_replace, замінює всі входження першого рядка на другий рядок в третьому рядку.

3) Напишіть функцію PHP, яка приймає рядок і повертає той самий рядок, в якому всі літери будуть малими.

4) Напишіть функцію PHP, яка приймає рядок і розділяє його на слова з використанням функції strtok. Потім поверніть масив цих слів.

5) Напишіть функцію PHP, яка приймає два рядки і повертає рядок, який містить підрядок першого рядка, знайдений за допомогою функції strstr, та замінений на другий рядок.

6) Напишіть функцію PHP, яка приймає масив рядків та об'єднує їх у один рядок з використанням функції join, розділених комою та пробілом.
7) Замінити усі слова "lorem" на слово **** . Підрахувати кількість усіх замін в тексті.

Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Phasellus at nisi ut nibh pharetra volutpat.
Sed pharetra accumsan velit, ut tempus est.
Mauris eu vulputate dolor. Vivamus in risus lobortis, pulvinar lectus ac, gravida ipsum.
Quisque diam tortor, sodales nec justo in, efficitur tincidunt orci. Nulla facilisi. Aenean id iaculis augue. Aliquam erat volutpat.

Morbi sed justo dolor. Vestibulum condimentum, massa vitae vulputate dapibus, diam nisl ornare sapien,
vitae tincidunt tellus lorem sed metus. Integer laoreet consequat dui, ut vulputate nulla pharetra eu.
Nullam aliquam turpis a aliquam accumsan. Sed maximus nisi ac lectus hendrerit scelerisque.
Suspendisse vitae felis porta nunc vulputate commodo sit amet sit amet nisl.
Donec dignissim diam odio lorem, at rhoncus dui hendrerit sed.
Phasellus elementum condimentum lacus lorem, in tempus lectus.

Vestibulum id laoreet nibh. Nullam posuere, sem vitae placerat mattis, ante nulla fringilla lorem,
sed luctus erat nibh eu nunc. Donec eu nibh lorem. Donec posuere leo ut faucibus venenatis. Vivamus sed placerat dui.
Sed hendrerit risus in nisl rhoncus vestibulum. Nam et tincidunt magna. Orci varius natoque penatibus et magnis dis parturient montes,
nascetur ridiculus mus. Etiam in neque quis ante semper malesuada pulvinar eget diam. Cras vitae suscipit quam.

Vivamus feugiat libero sit amet nunc fringilla, vitae sodales tortor finibus. Duis risus magna, ultrices ac nunc ac,
imperdiet maximus dolor. Praesent vel leo augue. Fusce egestas tempor suscipit. Maecenas cursus lacinia tortor et gravida.
Etiam feugiat lorem eget magna venenatis, non vestibulum arcu cursus. Vivamus justo purus, posuere in velit vel,
ullamcorper consequat metus. Duis varius, erat auctor vestibulum porttitor, dui nisl hendrerit dui, eu aliquam velit risus sit amet dolor.
Vestibulum vel hendrerit massa. Aliquam ornare justo arcu, laoreet ullamcorper ligula ullamcorper sit amet.
Aenean tristique lacus vitae diam lacinia ullamcorper. Suspendisse porta ultrices nisl, at aliquet elit placerat id.
Duis sollicitudin dignissim mi, quis pretium sapien vulputate sed. Duis quis velit finibus, cursus sapien quis, faucibus nisl.

Donec aliquam eu orci at ultrices. Cras lobortis odio ligula, ut viverra magna scelerisque sed.
Nullam ultrices nisl lorem, id congue ipsum bibendum at. Phasellus sed orci vulputate,
tristique lectus nec, pellentesque nunc. Donec dictum sem in magna lacinia, sit amet congue augue luctus.
Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla non gravida velit.
Vestibulum mattis blandit congue. Cras tincidunt purus sed mauris tempus interdum nec vel nisi.
Praesent viverra, nisl eu sagittis finibus, nisl ipsum dignissim turpis, at cursus est dui quis sapien.
Fusce orci arcu, porta a auctor eu, mollis eget tortor. Nam id metus volutpat, ultrices massa at, blandit massa. Aliquam erat volutpat.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>String func. Unit 2</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>

<?php

include_once 'func.php';

//Напишіть функцію PHP, яка приймає рядок і повертає той самий рядок, в якому всі літери будуть великими.
echo '<br>';
echo strToUpperCase('test');
echo '<br>';
//Напишіть функцію PHP, яка приймає два рядки, використовуючи функцію str_replace, замінює всі входження першого рядка на другий рядок в третьому рядку.
echo '<br>';
echo strReplace("black", "green", "<div class='black'>Color is black</div>");
echo '<br>';
//Напишіть функцію PHP, яка приймає рядок і повертає той самий рядок, в якому всі літери будуть малими.
echo '<br>';
echo strToLowerCase('TeSt');
echo '<br>';
//Напишіть функцію PHP, яка приймає рядок і розділяє його на слова з використанням функції strtok. Потім поверніть масив цих слів.
echo '<br>';
var_dump(getWordArrFromString('Donec aliquam eu orci at ultrices'));
echo '<br>';
//Напишіть функцію PHP, яка приймає два рядки і повертає рядок, який містить підрядок першого рядка,
//знайдений за допомогою функції strstr, та замінений на другий рядок.
echo '<br>';
echo getReplaceString('other text test 4444', 'test');
echo '<br>';
//Напишіть функцію PHP, яка приймає масив рядків та об'єднує їх у один рядок з використанням функції join, розділених комою та пробілом.
echo '<br>';
echo getStrFromArr(['black', 'white', 'red']);
echo '<br>';
//Замінити усі слова "lorem" на слово **** . Підрахувати кількість усіх замін в тексті.
echo '<br>';
$count = 0;
echo strReplace("lorem", "****", $text, $count);
echo '<br>';
echo $count;

$str = "Hello world";
echo "{$str[0]}<br />"; // H
$str = "Привіт світ!";
echo "{$str[0]}<br />";
echo '<br>';
?>
</body>
</html>