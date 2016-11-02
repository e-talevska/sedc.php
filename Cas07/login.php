<?php require 'db.php';?>
<?php
session_start();
//ako e korisnikot logiran
if(isset($_SESSION['logged_in'])){
    header("Location: profile.php");
    exit;
}else{
    if(isset($_COOKIE['logged_in'])){
        $_SESSION['logged_in'] = $_COOKIE['logged_in'];
        $_SESSION['username'] = $users[$_COOKIE['logged_in']]['username'];
         header("Location: profile.php");
         exit;
        
    }

}

?>


<?php
//check if the user submmited the form
$errors = [];
$username = $password = "";
$rememberme = false;
if(isset($_POST['login'])){
  $username =  $_POST['username'];
  $password = $_POST['password'];
  $rememberme = isset($_POST['rememberme']) ? true : false;
  
  //validacija
  if(trim($username)== ''){
      $errors['username'] = 'Username cannot be blank';
  }
  if($password == ''){
      $errors['password'] = 'Password cannot be blank';
  }
  $userFound = false;
  //check if errors array is empty
  //if it is empty => no validation errors
     if(count($errors)== 0){
         foreach($users as $id => $niza){
             if($username == $niza['username']
                     && $password == $niza['password']){
                 $userFound = $id;
                 break;
             }
             
         }
         
         if($userFound === false){
            $errors['password'] = 'Wrong username/password';  
         }else{
             $_SESSION['logged_in'] = $userFound;
             $_SESSION["username"] = $username;
             
             if($rememberme ){
                 setcookie("logged_in",$userFound, time()+3600*24*7);
             }
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
            <label for ="username">Username</label>
                <input value="<?php echo 'username'?>" name="username" id="username" type = "text">
            <div><?php 
            //if(isset ($errors['username']){
//                 echo $errors['username']; 
            //}else{
//                echo "";
            //}
            
            echo(isset($errors['username'])) ? $errors['username'] : "";
            
            ?></div>
            </p>
             <p>
                <label for = "pass">Password</label>
                <input value="<?php echo 'password';?>" name="password" id = "pass"type = "password">
                <div><?php echo(isset($errors['password'])) ? $errors['password'] : "";?></div>
            </p>
            <p>
            <p>
                <label>
                    <input type="checkbox" name="rememberme"<?php echo ($rememberme == true) ? "checked='checked'" : "";?>> Remember me
                </label>
            </p>
                <!--<input type ="submit">-->
                <button name = "login" type="submit">Login</button>  
                
            </p>
    </body>
</html>