<?php

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "labvezbi");


function doesExist($username){

	$mysql= new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

	$username=$mysql->real_escape_string($username);

	$query="SELECT * FROM users WHERE username='$username'";

	$result=$mysql->query($query);

	$mysql->close();

	if ($result->fetch_assoc()) {
		
		$result->free_result();
		
		return TRUE;
		//so toa ke najde red so toj username
	}

	

	return FALSE;

}

function insertUser($first_name,$last_name,$username,$password){

$link=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

$first_name=mysqli_real_escape_string($link,$first_name);
$last_name=mysqli_real_escape_string($link,$last_name);
$username=mysqli_real_escape_string($link,$username);
$password=sha1($password);
// var_dump($first_name,$last_name,$username,$password);
// exit;
$query="INSERT INTO users(first_name,last_name,username,password) VALUES ('$first_name','$last_name','$username','$password')";
// var_dump($query);
// exit;
$result=mysqli_query($link,$query);
// var_dump($query);
// exit;
// var_dump(mysqli_error($link));exit;
mysqli_close($link);
return $result;


}




?>