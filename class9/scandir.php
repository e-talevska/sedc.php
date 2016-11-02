<!DOCTYPE html>
<html>
<head>
	<title>list file</title>
</head>
<body>

<?php
	$extensions=['jpg' , 'jpeg' , 'png', 'gif'];
	$dir_contents=scandir("uploads");

	

	foreach ($dir_contents as $file_name) {
		$pathinfo=pathinfo("uploads/" . $file_name);
		if (in_array($pathinfo['extension'], $extensions)) {
			?>

				<img src="uploads/<?php  echo$file_name;   ?>">


			<?php
		}
	}

?>

</body>
</html>