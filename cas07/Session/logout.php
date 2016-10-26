<?php
session_start();
session_destroy();
// vtor nacin za sesion destroy
//unset($_SESSiiona['logged_in'];
//unset($_SESSiiona['username'];
header("Location: login.php");
exit;
?>
