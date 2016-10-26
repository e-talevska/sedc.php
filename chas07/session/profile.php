<?php 
session_start();
if(!isset($_SESSION['loggedin'])){
  header("Location: Login.php");
exit;  
}
?>

<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
        <h2>Hello <?php echo $_SESSION['username'];
        ?></h2>
        <form action="logout.php" method="post">
            <p>
                <!--<input type="submit" >-->
                <button name="logout" type="submit">Logout</button>
            </p>
        </form>
    </body>
</html>


