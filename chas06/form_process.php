<?php

if (isset($_POST['calculate'])){
    $widgets = (int)trim($_POST['widgets']);
    $taxrate = (int)trim($_POST['tax']);
    $price = 119.95;
    
    
    $result = ($taxrate/100)*($widgets * $price) ;
    $final = $result + ($widgets * $price);
    
    
   
    
    
    echo "You are purchasing $widgets widget(s) at a cost of \$$price each. <br> With tax, the total comes to \$" . number_format($final,2);
    
    

}

?>

