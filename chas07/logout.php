<?php
setcookie("login", NULL);
setcookie('username','', time() - 100);
header('Location: Login.php');
?>

