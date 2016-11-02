<?php
$errors = [];
if(isset($_GET['calc'])){
    $km = (float)$_GET['km'];
    $fe = (float)$_GET['fe'];
    $fp = (float)$_GET['fp'];
    
    if(trim($km)== "" || (string)$km != $_GET['km']){
        $errors['km'] = "Please enter a valid value for number of ";
        
    }
    if(trim($fe)== "" || (string)$fe != $_GET['fe']){
        $errors['fe'] = "Please enter a valid value for number of ";
}
     if(trim($fp)== "" || (string)$fp != $_GET['fp']){
        $errors['fp'] = "Please enter a valid value for number of ";
     }
     if(count($errors)==0){
         echo cost($km, $fe, $fp);
     }else{
         $_SESSION['validation'];
         $_SESSION['km'] = $km;
         $_SESSION['fe'] = $fe;
         $_SESSION['fp'] = $fp;
         var_dump($_SESSION);
     }
    
     }