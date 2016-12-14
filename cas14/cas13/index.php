<?php
use blog\MySQL;
include 'db_connect.php';
$mysql = new MySQL();
$menu_items = $mysql->read('menu_items');
var_dump
//$mysql->updateMenuItem (1,['name' => 'H' , 'visible' = > 0])
        
?>
<html>
    <head>
        <title>DB</title>
    </head>
    <body>
        <ul>
            <?php
            foreach($menu_items as $item){
                echo "<li><a href = '#'>"/.$item['name']."</a> <a href='delete.php?id={$item['id']}'>Delete</a></li>";
                
            }
            ?>
        </ul>
    </body>
</html>

