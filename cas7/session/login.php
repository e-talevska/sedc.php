<?php
require 'db.php';
?>

<?php
ini_set("display_errors", "On");
session_start();

if(isset($_SESSION['logged_in'])) {
    header("Location: profile.php");
    exit();
} else {
    if(isset($_COOKIE['logged_in'])) {
        $_SESSION['logged_in'] = $_COOKIE['logged_in'];
        $_SESSION['username'] = $users[$_SESSION['logged_in']]['username'];
        header("Location: profile.php");
        exit;
    }
}
?>

<?php
$errors = [];
$username = '';
$password = '';
$remember = false;
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = (isset($_POST['remember']))?true:false;
    
    if(trim($username) == '') $errors['username'] = 'Username can\'t be blank!' ;
    if($password == '') $errors['password'] = 'Password can\'t be blank!';
    $userFound = false;
    if(!count($errors)) {
        foreach ($users as $id => $array) {
            if($username == $array['username'] && $password == $array['password']) {
                $userFound = $id;
                break;
        }
    }
    
    if($userFound === false) {
        $errors['password'] = 'The given username and/or password do not exist in the database!';
    } else {
        $_SESSION['logged_in'] = $userFound;
        $_SESSION['username'] = $username;
        if($remember) {
            setcookie("logged_in", $userFound, time() + 3600 * 24 * 7);
        }
        header("Location: profile.php"); # redirect to profile.php
        exit();
    }
}
}
?>
      <html>

      <head>
        <title>Login</title>
      </head>

      <body>
        <form action="" method="post">
          <p>
            <label for="username">Username</label>
            <input name="username" id="username" type="text" value="<?php echo $username ?>">
            <span style="color: #F00;  font-weight: bold; display: block;">
<?php
echo (isset($errors['username']))?$errors['username']:'';
?>
</span>
          </p>
          <p>
            <label for="password">Password</label>
            <input name="password" id="password" type="password">
            <span style="color: #F00;  font-weight: bold; display: block;">
<?php
echo (isset($errors['password']))?$errors['password']:'';
?>
</span>
          </p>
          <p>
            <label>
              <input type="checkbox" name="remember" <?php echo ($remember)? 'checked = "checked"': ''; ?> >Remember me
            </label>
          </p>
          <hr>
          <p>
            <button style="float: right; margin-right: 5px;" name="login" type="submit">Login</button>
          </p>
        </form>
      </body>

      </html>