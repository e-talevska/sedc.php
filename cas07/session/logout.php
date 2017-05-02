<?php

foreach ($_COOKIE as $cookie => $val) {
    setcookie($cookie, null, time()-3600);
}
session_start();
session_destroy();
//unset($_SESSION['logged_in']);
//unset($_SESSION['username']);
header("Location: login.php");
exit;
?>