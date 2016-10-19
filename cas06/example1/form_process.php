<?php
//we got her by submitting the login form
if (isset($_POST['login'])) {
    $username = trim ($_POST['username']);
    $Password = trim ($_POST['pass']);
    if( $username == ""){
        echo "Username can not be empty";
    }
    if(strlen($Password)<6){
        echo "Password must be at least 6 chars";
      //prva varijanta
   //if(strpos($Password,"poss")=== false){
     // echo "password must contain pass";
    }
    }
echo "Hello";
?>