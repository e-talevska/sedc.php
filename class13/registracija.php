<?php
require "db_connect.php";

$errors=[];
$first_name=$last_name=$username=$password="";
if (isset($_POST['register'])) {
	
	$first_name=$_POST['firstname'];
	$last_name=$_POST['lastname'];
	$username=$_POST['username'];
	$password=$_POST['password'];


	if (trim($username)=="") {
		$errors['username']="username cannot be blank";

	}elseif (strlen($username)<5) {
		$errors['username']="username must be larger than 4 chars";

	}elseif (doesExist($username)) {
		$errors['username']="Username must be unique";
	}

	if (trim($password)=="") {
		$errors['password']="password cannot be blank";

	}elseif (strlen($password)<5) {
		$errors['password']="password must be larger than 4 chars";
		
	}
//ili cout($errors)==0 vo if ama dolnoto e pobrzo .. :D
	if ($errors==[]) {
		$result=insertUser($first_name,$last_name,$username,$password);

	}

}


?>







<!DOCTYPE html>
<html>
<head>
	<title>Register</title>

	<style>
	span{

		color:red;

	}



	</style>
</head>
<body>
<h3><?php  

if (isset($result)) {
	
	if ($result) {
		echo "Success";
	}else{
		echo"Error";
	}
}

 ?></h3>


<form method="post">
	<p>

	<label for="first_name">First Name</label>
	<input type="text" name="firstname" id="first_name" value="<?php   echo $first_name;   ?>">
	<span></span>
	</p>

	<p>

	<label for="last_name">Last Name</label>
	<input type="text" name="lastname" id="last_name" value="<?php  echo $last_name;  ?>">
	<span></span>
	</p>

	<p>

	<label for="user_name">User Name</label>
	<input type="text" name="username" id="user_name" value="<?php  echo $username;  ?>">
	<span><?php  echo isset($errors['username']) ? $errors['username'] : "";    ?></span>
	</p>
	<p>

	<label for="password">Password</label>
	<input type="text" name="password" id="password" value="<?php $password;  ?>">
	<span><?php  echo isset($errors['password']) ? $errors['password'] : "";    ?></span>
	</p>

	<p>
<button type="submit" name="register">Register</button>

	</p>




</form>

</body>
</html>