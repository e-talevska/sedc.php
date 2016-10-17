<?php 

require_once 'functions.php';

var_dump($_GET);

$a = $b = 0;

if(isset($_GET['a'])){
    $a = (int) $_GET['a'];
    
    //$a = (int) $_GET['a'];
    //settype($a, "integer"); 
    
} else {
echo 'HELLO WORLD';
    
}

if(isset($_GET['b'])){
    $b = (int) $_GET['b'];
    
    //$a = (int) $_GET['a'];
    //settype($a, "integer"); 
    
} else {
echo 'HELLO WORLD b';
    
}
?>

<?php
include 'header.php';
?>


    <body>
        
       <?php
       
       echo "Zbirot na a i b e " . zbir($a, $b);
       
       ?>

    </body>
    

    <?php
    include 'footer.php';
    ?>
