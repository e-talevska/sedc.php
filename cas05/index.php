<?php
require 'functions.php';
var_dump($_GET);
$a = $b = 0;
if(isset($_GET['a'])){
    $a = (int) $_GET['a'];
    
 //   citame string vo $a
 //   $a = $_GET['a'];
 //   ja pretvorame direktno vo integer
 //   settype($a, 'int')
}
if(isset($_GET ['b'])){
    $b = (int) $_GET ['b'];
}
?>
<?php
$title = 'hello world';
include 'header.php';
?>
    <body>
        <p>
            <?php echo "Zbirot na $a i $b e" . zbir ($a, $b);?>
            
        </p>
    </body>
<?php
include 'footer.php';
?>
