<!DOCTYPE html>
<html>
<head>
	<title>Exercise 2</title>
</head>
<body style="font-family: sans-serif;">
<?php 
ini_set("display_errors", "1");
if(isset($_POST['calc'])) {
	echo "You are purchasing {$_POST['n']} items at a cost of ".'$'.$_POST['cost']." each.<br>";
	echo "With tax, the total cost is $".round(($_POST['n']*$_POST['cost'] + $_POST['n']*(5*$_POST['cost']/100)), 2).".<br>";
} else {
	?>
	<form method="post" action="ex2.php">
		<label for='n'>Amount: </label><input value='0' type="number" id='n' name="n">
		<label for='cost'>Cost: </label><input value='0' type="number" step="any" name="cost" id='cost'>
		<button name='calc' type="submit">Calc</button>
	</form>
<?php
}
?>
</body>
</html>