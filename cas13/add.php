<?php 
include 'db_connect.php';
if(isset($_POST['insert'])) {
	$name = $_POST['name'];
	$position = $_POST['position'];
	$visible = isset($_POST['visible']) ? 1 : 0;
	$_sql = new \blog\MySQL();
	$_sql->insertMenuItem($name, $position, $visible);
	$_sql->updateMenuItem(1, ['visible' => 0, 'name' => 'H']);
}
?>
<form method="post">
	<p>
		<label for="name">Name</label>
		<input type="text" name="name" id="name">
	</p>
	<p>
		<label for="position">Position</label>
		<input type="number" name="position" id="position">
	</p>
	<p>
		<label for="visible">Visible</label>
		<input type="checkbox" name="visible" id="visible">
	</p>
	<p><button type="submit" name="insert">Insert</button></p>
</form>