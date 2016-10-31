<?php
function cost($num_km, $fuel, $price) {
    $num_liters = $num_km * $fuel / 100;
    return $num_liters * $price;
}
// 100km * 5l/100km
//echo cost(200, 5, 50);
?>
