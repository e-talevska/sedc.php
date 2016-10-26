<?php 
session_start();
?>
<?php 
// ako e korisnikot logiran redirekt na profile 
if(isset($_SESSION ['logged_in'])){
    header("Location: profile.php");
    exit;
   }
?>
<?php 
require 'db.php';
?>
<?php 
//check if the user submited the form 
$errors =[];
$username = '';
$password ='';
 //dali gi procital informaciite
if(isset($_POST ['login'])) {
    $username =$_POST['username'];
    $password =$_POST['pass'];
   //validacija
    if(trim($username)== ''){
      $errors['username'] ='Usrname can not be blank';  
    }
     if(trim($password)== ''){
      $errors['password'] ='Password can not be blank';  
    }
    $userFound = false;
    //check if errors array is empty
    //if its empty => no validation errors 
    if(count($errors)==0){
        //in real life check the database
        //but here check users array 
        //for matching values
        foreach ($users as $id => $niza){
            //vo $niza imam 'username' and 'password'
            if($username == $niza['username']
                    && $password == $niza['password']){
                $userFound = $id;
                break;
            }
        } 
        if($userFound === false) {
            $errors['password']= "Wrong username/password";
        } else {
           $_SESSION['logged_in']= $userFound;
           $_SESSION['username'] = $username;
            //redirect
            header("Location: profile.php");
            exit;
        }
    }
}
?>
<html>
    <head>
        <title>Cookies</title>
    </head>
    <body>
        <form action="" method="post">
            <p>
            <lable for="username">Username</lable>
            <input value ="<?php echo $username ?>"name="username" id="username" type="text"> 
            <div> <?php 
            echo (isset($errors['username']))? $errors['username']:"";    
            ?>
                </div>
            </p>
            <p>
            <lable for="pass">Password</lable>
            <input value ="<?php echo $password ?>" name="pass" id="pass" type="Password"> 
            <div>
                <?php 
            echo (isset($errors['password']))? $errors['password']:"";    
            ?>
            </div>
            </p>
            <p>
            <!--<input type="submit">-->
                <button name="login" type="submit">Login</button>   
            </p>
        </form>
    </body>
</html>

