<?php

require 'check_logged.php';
?>

<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
        <h2>Hello <?p echo $_SESSION['username']; ?></h2>
        <a href="Logout.php">Log out</a>
    </body>
</html>
