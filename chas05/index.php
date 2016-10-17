<?php 
require 'functions.php';
var_dump($_GET);

$a = 0;
$arr =['zdravo ova e prviot link','zdravo ova e vtoriot link','zdravo ova e tretiot link'];
if(isset($_GET['a'])){
    $a = (int) $_GET['a'];
    
    //$a =  $_GET['a'];
    //settype($a, "int");
}

if($a==0){
    echo $arr[0];
} else if($a==1){
   echo $arr[1];
} else if ($a==2){
    echo $arr[2];
}


$title = "Including PHP files";
?>


<html>
<?php 
    include "header.php";
?>
    <body>
        <p>
            <?php 
            
            ?>
        </p> 
    </body>
<?php 
include "footer.php";
?>
