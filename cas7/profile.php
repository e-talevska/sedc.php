<?php 
if(!isset($_COOKIE['login']) || $_COOKIE['login'] == '0') {
	header("Location: login.php");
	exit();
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>

<h2>Hello, <?php echo $_COOKIE['username'] ?>!</h2>
<a href="logout.php">Log out</a>
</body>
</html>