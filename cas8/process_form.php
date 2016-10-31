<?php
function trip ($l = 1, $f = 1, $c = 1) {
    return number_format($c * ($f * $l / 100), 2);
}
if(isset($_GET['GET'])) {
    $flag = true;
    foreach ($_GET as $key => $val) {
        if($key != 'GET')
        if($val == "") {
            $flag = false;
        }
    }
    if($flag) {
        echo 'cost: '.trip($_GET['l'], $_GET['f'], $_GET['c']).'<br>';
    } else {
        unset($_GET['GET']);
        header("Location: index.php");
        exit;
    } ?>
<a href="index.php" style="text-decoration: none; color: black;">Back</a>
 <?php } ?>