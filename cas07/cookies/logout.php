<?php
setcookie("login", null);
setcookie("username", "", time()- 100);
header("Location: login.php");
exit;
?>
