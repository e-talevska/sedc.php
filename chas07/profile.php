<?php 
if(!isset($_COOKIE['login'])){
  header("Location: Login.php");
exit;  
}
?>

<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
        <h2>Hello <?php echo $_COOKIE['username'];
        ?></h2>
        <form action="logout.php" method="post">
            <p>
                <!--<input type="submit" >-->
                <button name="logout" type="submit">Logout</button>
            </p>
        </form>
    </body>
</html>


