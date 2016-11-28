<?php
use blog\MySQL;
include "db_conect.php";
$mysql = new MySQL();

$menu_items = $mysql->read("menu_items");
//$mysql->updateMenuItem(1, ['name'=>'H'],['visible'=>0])
?>
<html>
    <head>
        <title>DB</title>
    </head>
    <body>
        <ul>
            <?php 
            foreach ($menu_items as $id) {
            echo "<li><a href='#'>".$id['name']."</a> <a href='delete.php?id={$id['id']}'>Delete</a></li>"; 
            
            }
?>
    <!-- <form method="POST" name="deleterequest" action="deleterequest.php">
         <input name='delete'type='submit' value='Delete' >";
            <button name="Delete" type="submit">Delete</button>
            </form> -->
           
        </ul>
    </body>
</html>
