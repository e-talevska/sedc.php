<?php
if(!isset($_COOKIE['login'])){
    header("Location: login.php");
    exit;
}

?>

<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
        <h2>Hello <?p echo $_COOKIE['username']; ?></h2>
        <a href="Logout.php">Log out</a>
    </body>
</html>
