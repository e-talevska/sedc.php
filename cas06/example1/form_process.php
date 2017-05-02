<?php
//we got here by submitting the login form
if(isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
//    var_dump($username);
    if($username == "") {
        echo "Username cannot be empty";
    }
    
    //prva varijanta
    if(strlen($password) < 6) {
        echo "Password must be at least 6 chars";
    }
    
    if(strpos($password, "pass") === false) {
        echo "Password must contain substring 'pass'";
    }
    //pozijata kade sto pocnuva podstringot "pass" => 0
//    strpos("password", "pass") === false; 
//    0 == false; => false == false
    
    //vtora varijanta
    if(strlen($password) < 6 || strpos($password, "pass") === false) {
        echo "Password must be at least 6 chars";
    }
}

echo "Hello";
?>