<?php 
session_start();
require 'check_logged.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>

<h2>Hello, <?php echo $_SESSION['username'] ?>!</h2>
<a href="logout.php">Log out</a>
</body>
</html>