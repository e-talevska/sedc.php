<?php
//ako e korisnikot logiran
//redirect na profile
if(isset($_COOKIE['login'])) {
    header("Location: profile.php");
    exit;
}
?>
<?php require 'db.php'; ?>
<?php
//check if the user submmited the form
//$errors = [
//    'username' => '',
//    'password' => '',
//];
$errors = [];
$username = $password = '';
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //validacija
    if(trim($username) == '') {
        $errors['username'] = 'Username cannot be blank';
    }
    
    if($password == '') {
        $errors['password'] = 'Password cannot be blank';
    }
    
    $userFound = false;
    //check if errors array is empty
    //if it is empty => no validation errors
    if(count($errors) == 0) {
        //in real life check the database
        //but here :) check the $users array
        //for matching values
        foreach ($users as $niza) {
            //vo $niza imam 'username' i 'password'
            if($username == $niza['username'] 
                    && $password == $niza['password']) {
                $userFound = true;
                break;
            }
        }
        if($userFound == false) {
            $errors['password'] = "Wrong username/password";
        } else {
            setcookie("login", "1", time() + 3600);
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
        <title>Forms</title>
    </head>
    <body>
        <form action="" method="post">
            <p>
                <label for="username">Username</label>
                <input value="<?php echo $username; ?>" name="username" id="username" type="text">
                <div><?php
//                if(isset($errors['username'])) {
//                    echo $errors['username'];
//                } else {
//                    echo "";
//                }
                echo (isset($errors['username'])) ? $errors['username'] : "";
                ?></div>
            </p>
             <p>
                <label for="pass">Password</label>
                <input value="<?php echo $password; ?>" name="password" id="pass" type="password">
             <div><?php echo (isset($errors['password'])) ? $errors['password'] : ""; ?></div>
             </p>
            <p>
                <!--<input type="submit" >-->
                <button name="login" type="submit">Login</button>
            </p>
        </form>
    </body>
</html>
