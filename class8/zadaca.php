<?php
session_start();
//toe ozdole kod odma e da gi dava u polinjata vrednostite sto sme gi vneli.
$cost=isset($_SESSION['presmetaj']) ? "cenata e " . $_SESSION['presmetaj'] : "";
$km=isset($_SESSION['km']) ? $_SESSION['km'] : "";
$fe=isset($_SESSION['fe']) ? $_SESSION['fe'] : "";
$fp=isset($_SESSION['fp']) ? $_SESSION['fp'] : "";


$errors=isset($_SESSION['validation']) ? $_SESSION['validation'] : "";

session_destroy();
?>



<!DOCTYPE html>
<html>
<head>
	<title>presmetka</title>
</head>
<body>
<div>
	
	<?php  echo$cost; ?> 
</div>


<form action="process_form.php" method="get">
	

<p>
<label for="km">KM</label>
<input type="text" name="kilometri" id="km" value="<?php  echo$km  ?>">
<span class="error">
<?php   echo isset($errors['km']) ? $errors['km'] : ""; ?>
</span>
</p>
<p>
<label for="fl">Fuel </label>
<input type="text" name="fuel" id="fl" value="<?php  echo$fe  ?>">
<span class="error">
	<?php   echo isset($errors['fe']) ? $errors['fe'] : ""; ?>
</span>
</p>
<p>
<label for="pr">Price</label>
<input type="text" name="price" id="pr" value="<?php  echo$fp  ?>">
<span class="error">
	<?php   echo isset($errors['fp']) ? $errors['fp'] : ""; ?>
</span>
</p>
<p>

<button type="submit" name="cal">Calculate</button>

</p>


</form>

</body>
</html>