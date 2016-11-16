<?php
include 'db_connect.php';
use blog\MySQL;
$_sql = new MySQL();
$menu_items = $_sql->read("menu_items");
?>
<ul>
	<?php 
	foreach ($menu_items as $item) {
		echo "<li><a href='#'>{$item['name']}</a></li>";
	}
	?>
</ul>