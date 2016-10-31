<title>Bye bye!</title>
<?php
session_start();
session_destroy();
foreach ($_COOKIE as $cookie => $value) {
    setcookie($cookie, null); # delete every cookie
}

// unset($_SESSION['logged_in']);
// unset($_SESSION['username']);

header("Location: login.php");
exit();
?>