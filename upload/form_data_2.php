<?php
session_start();

$message = [];


if (isset($_POST['uploadBtn']) && $_POST['uploadBtn'] == 'Upload') {
    $uploadFileDir = './files/';
    $allowedfileExtensions = array('jpg', 'gif', 'png');

    for ($i = 0; $i < count($_FILES['pic']['name']); $i++) {
        if (isset($_FILES['pic']['name'])) {
            // get details of the uploaded file
            $fileTmpPath = $_FILES['pic']['tmp_name'][$i];
            $fileName = $_FILES['pic']['name'][$i];
            $fileSize = $_FILES['pic']['size'][$i];
            $fileType = $_FILES['pic']['type'][$i];

            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            // sanitize file-name
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

            // Також перевірити чи це було надіслано зображення.

            if (in_array($fileExtension, $allowedfileExtensions)) {
                // directory in which the uploaded file will be moved

                $dest_path = $uploadFileDir . $newFileName;
                if (move_uploaded_file($fileTmpPath, $dest_path)) {
                    $message[$i] = "File $fileName is successfully uploaded.";
                    echo $message[$i];

                } else {
                    $message[$i] = 'There was some error moving the file to upload directory. Please make sure the upload directory is writable by web server.';
                    getErr($message[$i]);
                }
            } else {
                $message[$i] = 'Upload failed. Allowed file types: ' . implode(',', $allowedfileExtensions);
                getErr($message[$i]);
            }


        } else {
            $message[$i] = 'There is some error in the file upload. Please check the following error.<br>';
            $message[$i] .= 'Error:' . $_FILES['uploadedFile']['error'];

            getErr($message[$i]);
        }
    }

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
}


function getErr($message){
    $_SESSION['message'] = $message;

    header("Location: file_upload_2.php");
}

