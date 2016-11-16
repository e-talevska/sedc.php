<?php
include"db_connect.php";
use \blog\MySql;

$mysql= new MySql();
$menu_items=$mysql->read("menu_items");

$mysql->updateMenuItem(1,['name'=>'H','visible'=>0]);

?>
<!DOCTYPE html>
<html>
<head>
	<title>DB</title>
</head>
<body>
<ul>
	
<?php

foreach ($menu_items as $item) {
	echo "<li><a href='#'>" . $item['name'] . "</a></li>";
}

?>

</ul>

</body>
</html>