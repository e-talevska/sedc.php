<?php
require 'db_connect.php';
if(isset($_POST['submit'])) {
	if($_POST['id'] == $_POST['name'] && $_POST['position'] == $_POST['name'] && $_POST['name'] == "") {
		?>
		<span style="color: red;">PLEASE FILL AT LEAST ONE FIELD IN!</span>
		<?php
	} else {
		$_sql = new \blog\MySQL();
		$data = [];
		if(($_POST['id']) != "") {
			$data['id'] = 	$_POST['id'];
		}
		if(($_POST['position']) != "") {
			$data['position'] = 	$_POST['position'];
		}
		if(($_POST['name']) != "") {
			$data['name'] = 	$_POST['name'];
		}
		$_sql->delete($data, "menu_items");
	}
}
?>
<style>
		form * {
			display: block;
		}
		</style>
<div style="margin: 5px 3px;">
	<form method="post">
		
		<input type="text" placeholder="id" name="id">
		<input type="text" placeholder="name" name="name">
		<input type="text" placeholder="position" name="position">
		<button type="submit" name="submit">Delete</button>
	</form>
</div>