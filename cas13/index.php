<?php
use blog\MySQL;
include 'db_connect.php';
$mysql = new MySQL();
$mysql->read("menu_items");
?>