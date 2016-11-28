<?php
//namespace blog;
include 'db_conect.php';
$mysql= new \blog\MySQL();
if(isset($_GET['id'])){
    $mysql->deleteMenuItem($_GET['id']);
}
header("Location: index.php");
//$mysql->deleteMenuItem($id);
?>
