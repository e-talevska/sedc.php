<?php 
require 'functions.php';

$title = "Hello";
?>


<html>
<?php 
    include "header.php";
?>
    <body>
        <p>
            <?php 
            echo "zbirot na 2 i 4 e " . zbir(2,4);
            ?>
        </p> 
    </body>
<?php 
include "footer.php";
?>
