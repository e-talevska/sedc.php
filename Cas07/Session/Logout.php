<?php

foreach($_COOKIE as $_cookie => $val){
    setcookie($cookie, null, time()-3600);
}
session_start();

session_destroy();
//unset($_SESSION['loggedn_in']);
//unset($_SESSION['username']);
header("Location: login.php");
exit;
?>
