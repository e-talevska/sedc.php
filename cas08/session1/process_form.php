<?php
//var_dump($_GET);exit;
session_start();
require 'function.php';
$errors = [];
if(isset($_GET['Calc'])) {
    $km= (float)$_GET['km'];
    $fe= (float)$_GET['fe'];
    $fp= (float)$_GET['fp'];
    //check if empty and if the value entered is not numeric 
    if(trim($km)== '' ||(string)$km != $_GET['km']) {
        
        $errors['km'] = "Please enter valid value for number of km";
    }
        if(trim($fe)== '' ||(string)$fe != $_GET['fe']) {
        
        $errors['fe'] = "Please enter valid value for fuel efficency";
    }
    if(trim($fp)== '' ||(string)$fp != $_GET['fp']) {
        
        $errors['fp'] = "Please enter valid value for fuel price";
    }
    //if zero no errors found 
   if(count($errors)==0) {
       $_SESSION ['cost']= cost($km, $fe, $fp);
   } else
   {
     $_SESSION['validation']= $errors;  
     $_SESSION['km'] =$_GET['km'];
     $_SESSION['fe'] =$_GET['fe'];
     $_SESSION['fp'] =$_GET['fp'];
     
   }
   header("Location: index.php");
     exit;
}
?>