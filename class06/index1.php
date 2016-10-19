<?php
//we have here by submitting the login form
if(isset($_POST['kopce'])){
    $username=trim($_POST['user']);
    $password=trim($_POST['password']);
    
    if($username == ""){
        echo"username can not be empty";
    }
    if(strlen($password)<6){
        echo"password must be at least 6 chars";
    }
    if(strpos($password, "pass")===FALSE){
        echo"password must contain substring 'pass'";
    }
    
}




?>

