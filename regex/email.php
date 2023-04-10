<?php
include_once 'func.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    if (isValidEmail($email))
        echo "Mail $email valid";
    else
        echo "Mail $email not valid";
}
?>

<!DOCTYPE html>
<head>
    <title>Form email</title>
</head>
<body>

<form action="" method="post">
    Email: <label>
        <input type="text" name="email">
    </label><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
