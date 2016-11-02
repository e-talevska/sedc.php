<?php
//we got here by sumbmitting the login form
if (isset($_POST['login'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
   if ( $username ==""){
       echo "Username cannot be empty";
   }
   //prva varijanta
   if(strlen($password) < 6){
       echo "Password must be 6 characters";
   }

   if(strpos($password, "pass")=== false){
       echo "Pssword must contain substring 'pass'";
   }
   //vtora varijanta
   if(strlen($password) < 6 || strpos ($password, "pass") === false){
     echo "Password must be 6 characters";
}
}
?>
