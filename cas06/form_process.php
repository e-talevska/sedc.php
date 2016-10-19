<?php 
	require_once 'ex1.php';
	if(isset($_POST['login'])) {
		if(validate($_POST['username'], 'user') && validate($_POST['password'], 'pass') && validate($_POST['email'], 'email')) {
			echo "Welcome, ".$_POST['username']."!<br>";
		} else {
			echo 'Please fix your sign-in credentials!<br>';
		}
	}
?>