<?php
session_start();
$message = '';

var_dump($_FILES['uploadedFile']);


if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload') {
    if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
        // get details of the uploaded file
        $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
        $fileName = $_FILES['uploadedFile']['name'];
        $fileSize = $_FILES['uploadedFile']['size'];
        $fileType = $_FILES['uploadedFile']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));


        // sanitize file-name
        $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

        // Також перевірити чи це було надіслано зображення.
        $allowedfileExtensions = array('jpg', 'gif', 'png');
        if (in_array($fileExtension, $allowedfileExtensions)) {
            // directory in which the uploaded file will be moved
            $uploadFileDir = './files/';
            $dest_path = $uploadFileDir . $newFileName;
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                $message = "File $fileName is successfully uploaded.";
                echo $message;
                echo "<br>";
                $files = scandir($uploadFileDir);
                ?>
                <table>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                    <tbody>
                    <?php
                    for ($i = 0; $i < count($files); $i++) {
                        echo '<tr><td>' . ($i + 1) . '</td><td>' . $files[$i] . '</td></tr>';
                    }
                    ?>
                    </tbody>
                </table>
                <?php
                exit(0);
            } else {
                $message = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
            }
        } else {
            $message = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
        }
    } else {
        $message = 'There is some error in the file upload. Please check the following error.<br>';
        $message .= 'Error:' . $_FILES['uploadedFile']['error'];
    }
}
$_SESSION['message'] = $message;

header("Location: file_upload.php");
