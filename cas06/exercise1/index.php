<?php
$taxRate = $taxError = $numWidgets = $widgError = '';
if(isset($_POST['calculate'])) {
    $widgetPrice = 119.95;
    $numWidgets = (int)$_POST['widget'];
    $taxRate = (float)$_POST['tax'];

    if($numWidgets == '') {
        $widgError = "Number of widget must not be empty";
    } else if((string)$numWidgets != $_POST['widget']) {
        $widgError = "Please enter valid number";
    }

    if($taxRate == '') {
        $taxError = "Tax must not be empty";
    } else if((string)$taxRate != $_POST['tax']) {
        $taxError = "Please enter valid number";
    }
    
    if($taxError == '' && $widgError == '') {
        $baseCost = $widgetPrice * $numWidgets;
        $tax = ($taxRate/100)*$baseCost; //danok
        $cost = $baseCost + $tax;
    }
}
?>
<html>
    <head>
        <title>Forms</title>
    </head>
    <body>
        <p>
            <?php if(isset($cost)){
                echo "Kupivate $numWidgets widgets po cena od \$$widgetPrice . Vkupnata cena iznesuva \$" . number_format($cost, 2);
            } ?>
        </p>
        <form action="" method="post">
            <p>
                <label for="widget">Number of widgets</label>
                <input value="<?php echo $numWidgets; ?>" name="widget" id="widget" type="text">
                <span><?php echo $widgError; ?></span>
            </p>
            <p>
                <label for="tax">Tax rate</label>
                <input value="<?= $taxRate; ?>" name="tax" id="tax" type="text">
                <span><?php echo $taxError; ?></span>
            </p>
            <p>
                <!--<input type="submit" >-->
                <button name="calculate" type="submit">Calculate</button>
            </p>
        </form>
    </body>
</html>
