<?php
$filename = "files/example.txt";

$handle = fopen($filename, "a");
fwrite ($handle, "abc");
fclose($handle);

$handle = fopen("files/example.txt", "r");
$content = fread ($handle, 3);
rewind($handle); 
$whole_content = fread($handle, filesize($filename));
fclose($handle);
var_dump($content, $whole_content);

$filename1 = "files/multiline.txt";
$handle = fopen($filename1, "r");
$content = '';
while (!feof($handle)){
//$content .=fgets()
    var_dump(fgetcsv($handle));
}
fclose ($handle);
var_dump($content);
?>
<html>
    <head>
        <title>Download</title>
    </head>
    <body>
        <a href ="download.php">Download</a>
    </body>
</html>
