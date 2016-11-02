<?php

$filename1 = "files/multiline.txt";
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
echo file_get_contents($filename1);


?>

