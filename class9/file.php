<?php

$filename="files/example.txt";

$handle=fopen($filename, "w");
fwrite($handle, "abc");

fclose($handle);


$handle=fopen("files/example.txt", "r");
$content=fread($handle, 3);

rewind($handle);//rewind go vrakja pointero na pocetoko od koga e procitano nesto .. oti koga se procita nesto i se ostanuva do tamo deka sme procitali

$wholecontent=fread($handle, filesize($filename));//taka ni dava celio fajl do kraj ke procita koku e golem a inace dava do 3 bajti ..

//file_get_content vo edna komanda cita celio fajl i go zatvara...

fclose($handle);

var_dump($content,$wholecontent);





$filename1="files/multiline.txt";

$handle=fopen($filename1, "r");



$content="";
while (!feof($handle))//e isto so i (!feof($handle))
 {
	//$content .=fgets($handle);
	var_dump(fgetcsv($handle));
}

fclose($handle);

var_dump($content);

?>
<!DOCTYPE html>
<html>
<head>
	<title>downolad</title>
</head>
<body>


<a href="download.php">Download</a>

</body>
</html>