<?php
use blog\MySQL;
include "db_conect.php";
$mysql = new MySQL();

$menu_items = $mysql->read("menu_items");
$mysql->updateMenuItem(1, ['name'=>'H'],['visible'=>0])
?>
<html>
    <head>
        <title>DB</title>
    </head>
    <body>
        <ul>
            <?php 
            foreach ($menu_items as $item) {
            echo "<li><a href='#'>".$item['name']."</li>";

            }
           ?>
        </ul>
    </body>
</html>
