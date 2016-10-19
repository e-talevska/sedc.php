<?php

$widget = ($POST['widget']);

$price = 119.95;
$tax = $widget = ($POST['tax']);
  
$total = $widget * $price;
$total = $total + ($total * $tax);



$total = number_format($total, 2);


echo '<p>You are purchasing <b>' .
$widget . '</b> widget(s) at a price of ' .
$price . '. The total is €' . $total;
  


?>

 
