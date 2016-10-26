<?php 
if(isset($_COOKIE['login'])){
    header("Location: profile.php");
}
?>
<?php
require 'db.php';
$errors = [];
$username = '';
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    
if(trim($username)==""){
    $errors['username'] = 'Username cannot be blank';
}

if($password == ''){
    $errors['password'] = 'Password cannot be blank';
}

$userFound = false;

if(count($errors) == 0){
    foreach ($users as $niza){
        if($username == $niza['username'] && $password == $niza['password']){
           $userFound = true;
           break;
        }
    }
if(!$userFound){
    $errors['password'] = "Wrong Username/Password";
} else {
    setcookie("login","1",time() + 3600);
    setcookie("username", $username, time() + 3600);
    //redirect
    header("Location: profile.php");
    exit;
}
}
    
}

?>

<html>
    <head>
        <title>title</title>
    </head>
    <body>
<form action="" method="post">
            <p>
                <label for="username">Username</label>
                <input value ="<?php echo $username; ?>" name="username" id="username" type="text">
            <div><?php 
            echo (isset($errors['username'])) ? $errors['username'] : "";
            ?></div>
            </p>
             <p>
                <label for="pass">Password</label>
                <input name="password" id="pass" type="password">
             <div><?php
             echo (isset($errors['password'])) ? $errors['password'] : "";
             ?></div>
            </p>
            <p>
                <!--<input type="submit" >-->
                <button name="login" type="submit">Login</button>
            </p>
        </form>
    </body>
</html>


