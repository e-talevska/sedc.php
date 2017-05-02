<?php

$filename = "files/example.txt";

$handle = fopen($filename, "as");
fwrite($handle, "abc");
fclose($handle);


$filename = "files/multiline.txt";
$content1 = [];
$content = '';

$handle = fopen($filename ,"r");



while(!feof($handle)){
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

