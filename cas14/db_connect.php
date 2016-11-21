<?php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "password");
define("DB_NAME", "labvezbi");

function doesExist ($username) {
	$mysql = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$username = $mysql->real_escape_string($username);
	$query = "select * from users where `username` = '$username'";
	$res = $mysql->query($query);

	$mysql->close();
	
	if ($res->fetch_assoc()) { $res->free_result(); return true; } return false;
}

function insertUser($first_name, $last_name, $username, $password) {
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	
	$first_name = mysqli_real_escape_string($link, $first_name);
	$last_name = mysqli_real_escape_string($link, $last_name);
	$username = mysqli_real_escape_string($link, $username);
	$password = sha1($password);
	
	
	$query = "insert into users (`first_name`, `last_name`, `username`, `password`) values ('$first_name', '$last_name', '$username', '$password')";
	
	$res = mysqli_query($link, $query);
	mysqli_close($link);
	return $res;
}