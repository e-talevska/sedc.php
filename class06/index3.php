<?php
//we have here by submitting the login form
if(isset($_POST['kopce'])){
    $username=(int)$_POST['num'];
    $password=(int)$_POST['tax'];
    
    if($username == ""){
        echo"kolicina can not be empty";
    }
    if($password == ""){
        echo"rate  can not be empty";
    }
    if(is_numeric($username)&& is_numeric($password)===FALSE)
    {   
        echo"ne se brojki";
    }
    
    $rez=$username*119.95;
    $cost=5/100*$rez+$rez;
    
            echo"you are purchasing " . $username . "widgets at a cost of $119.95 eacho.With tax , the total comes to $" . number_format($cost ,2);
    
    
}




?>

