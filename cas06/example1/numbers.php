<?php
if(isset($_POST)['calculate'])){
$numWidgets = (int)$_POST['widget'];
$taxRate = (float)$_POST['tax'];

if($numWidgets !== $_POST['widget']){
$widgError = "Please enter a valid number";
}else if

?>

<html>
   
    <head>
        <title>Forms</title>
    </head>
    <body>
        <form action="" method="post">
            <p>
            <label for ="Widget">Username</label>
                <input name = "widget" id =" Widget" type = "text">
                <span><?php echo $widgError; ? </span>
               
            </p>
             <p>
                <label for = "pass">Password</label>
                <input name="tax" id = "tax" type = "text">
                <span><?php echo $widgError; ? </span>
            </p>
            <p>
                <!--<input type ="submit">-->
                <button name = "calculate" type = "submit">Calculate</button>  
                
            </p>
        </form>
    </body>
</html>