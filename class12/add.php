<?php
include"db_connect.php";

if(isset($_POST['insert'])){
$name=$_POST['name'];
$position=$_POST['position'];
$visible=isset($_POST['visible']) ? 1 : 0;


$mysql=new\blog\MySql();

$success=$mysql->insertNewMenuItem($name,$position,$visible);

}


?>





<!DOCTYPE html>
<html>
<head>
	<title>Insert in base</title>
</head>
<body>
<?php  if (isset($success)&&$success) {
	echo"<h3>Item Inserted ok</h3>";
}   ?>
<form method="post">

<p>

<label for="name">NAME</label>
<input type="text" name="name" id="name">
</p>
<p>

<label for="position">POSITION</label>
<input type="number" name="position" id="position">
</p>
<p>

<label for="visible">VISIBLE</label>
<input type="checkbox" name="visible" id="visible">
</p>
<button type="submit" name="insert">INSERT</button>

</form>



</body>
</html>