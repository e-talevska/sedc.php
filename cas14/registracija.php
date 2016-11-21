<style type="text/css">
	span {
		color: red;
		font-weight: bold;
		text-transform: uppercase;
	}
</style>

<?php
require 'db_connect.php';
$errors = []; 
$first_name = $last_name = $username = $password = "";
if(isset($_POST['register'])) {
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(trim($username) == "") {
		$errors['username'] = "Username cannot be blank!";
	} else if(strlen($username) < 5) {
		$errors['username'] = "Username must be at least five characters long!";
	} else if(doesExist($username)) {
		$errors['username'] = "Username is already taken!";
	}
	
	if(trim($password) == "") {
		$errors['password'] = "Password cannot be blank!";
	} else if(strlen($password) < 5) {
		$errors['password'] = "Password must be at least five characters long!";
	}
	
	if(!count($errors)) { # or $errors == []
		insertUser($first_name, $last_name, $username, $password);
	}
	
}
?>

<!DOCTYPE html>
<title>Register</title>
<h3><?php if(isset($res)) if($res) echo "Success"; else echo "Error"; ?></h3>
<form method="post">
	<p>
		<label for="first_name">First Name</label>
		<input type="text" name="first_name" id="first_name" value="<?php echo $first_name ?>">
		<span></span>
	</p>
	<p>
		<label for="last_name">Last Name</label>
		<input type="text" name="last_name" id="last_name" value="<?php echo $last_name ?>">
		<span></span>
	</p>
	<p>
		<label for="username">Username</label>
		<input type="text" name="username" id="username" value="<?php echo $username ?>">
		<span><?php echo isset($errors['username'])?$errors['username']:"" ?></span>
	</p>
	<p>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" value="<?php echo $password ?>">
		<span><?php echo isset($errors['password'])?$errors['password']:"" ?></span>
	</p>
	<p>
	<button name="register" type="submit">Register</button>
</form>