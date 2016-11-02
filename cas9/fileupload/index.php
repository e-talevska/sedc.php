<?php
var_dump($_FILES);
$error = '';
$success = '';
if(isset($_POST['upload'])) {
    if($_FILES['file']['error'] != 0) { # an error exists
        switch ($_FILES['file']['error']) {
            case UPLOAD_ERR_INI_SIZE:
                $error = "Upload size greater than ".ini_get('upload_max_filesize');
                break;
            case UPLOAD_ERR_NO_FILE:
                $error = "Please choose file to upload";
                break;
            default:
                # code...
                break;
    }
} else {
    $tmp_file = $_FILES['file']['tmp_name'];
    $new_path = "uploads/".$_FILES['file']['name'];
    if(!move_uploaded_file($tmp_file, $new_path)) {
        $error = "Unhandled exception";
    } else {
        $success = "File uploaded successfully";
    }
}
}
?>

<html>
    <head>
        <title>File Upload</title>
    </head>
    <body>
    <h2><?php echo $success ?></h2>
        <form method="POST" enctype="multipart/form-data">
            <p>
                <input type="file" name="file">
                <span style="color: red;"><?php echo $error ?></span>
            </p>
            <p>
                <button name="upload" type="submit">Upload</button>
            </p>
        </form>
    </body>
</html>