<?php
include "db_connect.php";
$mysql = new blog\MySQL();
if(isset($_GET[id])){
        $mysql->deleteMenuItem($id);
}
header("Location: index.php")
?> 

