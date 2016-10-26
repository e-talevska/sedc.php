<title>Bye bye!</title>
<?php 
setcookie('login', null);
setcookie('username', '', time()-1);
header("Location: login.php");
exit();
// the former one is the same as the latter one
 ?>