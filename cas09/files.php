<?php
$filename = "files/example.txt";
$handle = fopen($filename, "a");
fwrite($handle, "abc");
fclose($handle);

$handle = fopen("files/example.txt", "r");
$content = fread($handle, 3); //string
rewind($handle); // positions the pointers at the begining of the file 
$whole_content = fread($handle, filesize($filename)); //string
fclose($handle);

var_dump($content, $whole_content);


$file_multiline = "files/multiline.txt";
$handle = fopen($file_multiline, "r");
$content = '';
//!feof($handle) <===> feof($handle) == false
while (!feof($handle)) {
  // $content .= fgets($handle);
   var_dump(fgetcsv($handle));
}
fclose($handle);
var_dump($content);
?>

<html>
    <head>
        <title>Download</title>
    </head>
    <body>
        <a href="download.php">Download</a>
    </body>
</html>
