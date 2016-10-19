<?php 
require 'functions.php';
var_dump($_GET);
$a = $b = 0;
if(isset($_GET['a'])) {
   $a = (int)$_GET['a'];
    // citame string vo $a ja pretvorame direkno vo integer
    //$a = $_GET['a'];
   // settype($a, "int");
}

if(isset($_GET ['b'])){
 $b = (int)$_GET['b'];   
}
?>
<?php 
    $title = "including php files"; 
    include 'header.php';
    ?>

    
    <body>
        <p>
 <?php echo " Zbirot na $a i $b e ". zbir ($a,$b); ?> 
        </p>
    </body>
<?php
include 'footer.php';
?>
</html>

