<?php

//var_dump($_FILES);

$success=$error='';
//proveruva dali e stisnano submit
if (isset($_POST['upload'])) {
	
	if ($_FILES['file']['error'] !=0) {//ima greska
		
		switch ($_FILES['file']['error']) {

			case UPLOAD_ERR_INI_SIZE:

				$error="upoload size too big than " . ini_get("upload_max_filesize");

				break;
			case UPLOAD_ERR_NO_FILE:
				$error="please choose file to upload";
				break;
			default:
				# code...
				break;
		}
	}else{
		$tmp_file=$_FILES['file']['tmp_name'];
		$new_path="uploads/" . $_FILES['file']['name'];
		if (!move_uploaded_file($tmp_file, $new_path)) {
			$error="error while moving the file";

		}else{
			$success="file upload successfuli";
		}

	}
}

?>





<!DOCTYPE html>
<html>
<head>
	<title>Upload File</title>
</head>
<body>
<h2><?php  echo$success;  ?></h2>


<form method="post" enctype="multipart/form-data">
	
	<p>
		<input type="file" name="file">
		<span> <?php echo$error;  ?>  </span>
	</p>

	<p>
		<button name="upload" type="submit">Upload</button>
	</p>



</form>

</body>
</html>