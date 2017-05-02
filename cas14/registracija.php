<?php
require 'db_connect.php';
$errors = [];
$first_name = $last_name = $username = $password = "";
if(isset($_POST['register'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(trim($username) == "") {
        $errors['username'] = "Username cannot be blank";
    } else if(strlen($username) < 5) {
        $errors['username'] = "Username must be larger than 4 chars";
    } else if(doesExist($username)) {
        $errors['username'] = "Username must be unique";
    }
    
     if(trim($password) == "") {
        $errors['password'] = "Password cannot be blank";
    } else if(strlen($password) < 5) {
        $errors['password'] = "Password must be larger than 4 chars";
    }
    
    //count($errors) == 0
    if($errors == []){
        $result = insertUser($first_name, $last_name, $username, $password);
    }
}

?>
<html>
    <head>
        <title>Register</title>
        <style>
            span {
                color: red;
            }
        </style>
    </head>
    <body>
        <h3><?php 
        if(isset($result)) {
            if($result) {
                echo "Success";
            } else {
                echo "Error";
            }
        }
            
        ?></h3>
        <form method="POST">
            <p>
                <label for="first_name">First Name</label>
                <input type="text" name="firstname" id="first_name" value="<?php echo $first_name; ?>" >
                <span></span>
            </p>
            <p>
                <label for="last_name">Last Name</label>
                <input type="text" name="lastname" id="last_name" value="<?php echo $last_name; ?>" >
                <span></span>
            </p>
            <p>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value="<?php echo $username; ?>" >
                <span><?php echo isset($errors['username']) ? $errors['username'] : ""; ?></span>
            </p>
             <p>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="<?php echo $password; ?>" >
                <span><?php echo isset($errors['password']) ? $errors['password'] : ""; ?></span>
            </p>
            <p>
                <button name="register" type="submit">Register</button>
            </p>
        </form>
    </body>
</html>
