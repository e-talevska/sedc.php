<?php 
if(isset($_COOKIE['login']) && $_COOKIE['login'] == '1') {
	header("Location: profile.php");
	exit();
}
 ?>

<?php 
ini_set("display_errors", "On");
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
	if(!count($errors)) {
		$userFound = false;
		foreach ($users as $array) {
			if($username == $array['username'] && $password == $array['password']) {
				$userFound = true;
				break;
			}
		}

		if(!$userFound) {
			$errors['password'] = 'The given username and/or password do not exist in the database!';
		} else {
			setcookie('login', '1', time() + 3600 /* seconds = 1 hour*/ );
			setcookie('username', $username, time() + 3600);
			header("Location: profile.php");
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