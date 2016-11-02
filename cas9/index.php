<?php
$filename = 'files/text.txt';

$handle = fopen($filename, 'w');
$res = fwrite($handle, "a\nbc");
fclose($handle);

var_dump($res,file_get_contents($filename));


$handle = fopen($filename, 'r'); # making a connection
# copying to another variable
$partial = fread($handle, 3);
rewind($handle);
$content = file_get_contents($filename);
fclose($handle); # getting rid of the connection for optimization

echo 'full content<br>';
var_dump($content);

unlink($filename);

echo '<br>partial content<br>';
var_dump($partial); # printing out the content of 'files/text.txt'


$filename1 = 'files/multiline.txt';
$handle = fopen($filename1, 'r');
$content = "";

# while not at end of file
while(!feof($handle)) {
    #  $content .= fgets($handle);
    var_dump(fgetcsv($handle));
}

fclose($handle);
var_dump($content);

?>
<title>Download</title>
<a href="download.php">Download</a>