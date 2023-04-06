<!--
2) Зробити можливість завантаження файлів першим способом. Відправляти усі дані на сторінку form_data.php ,
використовувати тип передачі пост. На сторінці form_data виловити усі файли і відобразити їх.
Якщо файлу не буде надіслано то повернутися на попередню сторінку й відобразити текст під полем де завантаження файлу ,
що файл обовязково має бути надісланий.
Також перевірити чи це було надіслано зображення.
-->

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP File Upload</title>
</head>
<body>
<?php
if (isset($_SESSION['message']) && $_SESSION['message']) {
    echo '<p class="notification">' . $_SESSION['message'] . '</p>';
    unset($_SESSION['message']);
}

?>
<form method="POST" action="form_data.php" enctype="multipart/form-data">
    <div class="upload-wrapper">
        <span class="file-name">Choose a file...</span>
        <label for="file-upload">Browse<input type="file" id="file-upload" name="uploadedFile"></label>
    </div>
    <input type="submit" name="uploadBtn" value="Upload"/>
</form>
</body>
</html>
