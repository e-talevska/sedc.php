<?php
// var_dump($_GET);exit;
session_start();
require "presmetka.php";
$errors=[];
$km=$fe=$fp='';

if (isset($_GET['cal'])) {
	
	$km =(float)$_GET['kilometri'];
	$fe = (float)$_GET['fuel'];
	$fp = (float)$_GET['price'];

	//proveruva dali e prazno i dali e broj...
	if (trim($km)==""|| (string)$km!=$_GET['kilometri']) {

		$errors['km']="please enter valid value for number of kilometars";

	}
	if (trim($fe)==""|| (string)$fe!=$_GET['fuel']) {

		$errors['fe']="please enter valid value for number of kefificency";

	}
	if (trim($fp)==""|| (string)$fp!=$_GET['price']) {

		$errors['fp']="please enter valid value for number of price";

	}

	//no validation errors found
	if (count($errors)==0) {
		$_SESSION['presmetaj']=presmetaj($km, $fe,$fp);
		
	}else{
		$_SESSION['validation']=$errors;
		$_SESSION['km']=$_GET['kilometri'];
		$_SESSION['fe']=$_GET['fuel'];
		$_SESSION['fp']= $_GET['price'];
		

	}
	header("Location:zadaca.php");
		exit;


}

?>