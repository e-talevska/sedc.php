<?php
session_start();
//da ne e setirano 
if(!isset($_SESSION['logged_in'])){
    header("Location: login.php");
    exit;
}
?>
<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
        <h2>Hello <?php echo $_SESSION ['username'];?></h2>
        <a href="logout.php">Log out</a>
    </body>
</html>


