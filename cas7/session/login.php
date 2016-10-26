<?php 
ini_set("display_errors", "On");
session_start();
if(isset($_SESSION['logged_in'])) {
	header("Location: profile.php");
	exit();
}
 ?>

<?php 
require 'db.php';
 ?>

<?php 
$errors = [];
$username = '';
$password = '';
if(isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(trim($username) == '') $errors['username'] = 'Username can\'t be blank!' ;
	if($password == '') $errors['password'] = 'Password can\'t be blank!';
	$userFound = false;
	if(!count($errors)) {
		foreach ($users as $id => $array) {
			if($username == $array['username'] && $password == $array['password']) {
				$userFound = $id;
				break;
			}
		}

		if($userFound === false) {
			$errors['password'] = 'The given username and/or password do not exist in the database!';
		} else {
			$_SESSION['logged_in'] = $userFound;
			$_SESSION['username'] = $username;
			header("Location: profile.php"); # redirect to profile.php
			exit();
		}
	}
}
 ?>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<form action="" method="post">
			<p>
				<label for="username">Username</label>
				<input name="username" id="username" type="text" value="<?php echo $username ?>">
				<span style="color: #F00;  font-weight: bold; display: block;">
					<?php 
						echo (isset($errors['username']))?$errors['username']:'';
					 ?>
				</span>
			</p>
			<p>
				<label for="password">Password</label>
				<input name="password" id="password" type="password">
				<span style="color: #F00;  font-weight: bold; display: block;">
					<?php 
						echo (isset($errors['password']))?$errors['password']:'';
					 ?>
				</span>
			</p>
			<hr>
			<p>
				<button style="float: right; margin-right: 5px;" name="login" type="submit">Login</button>
			</p>
		</form>
	</body>
</html>