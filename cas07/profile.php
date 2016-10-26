<?php
//ako korisnikot ne e logiran
if(!isset($_COOKIE['login'])) {
    header("Location: login.php");
    exit;
}
?>
<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
        <h2>Hello <?php echo $_COOKIE['username']; ?></h2>
        <a href="logout.php">Log out</a>
    </body>
</html>
