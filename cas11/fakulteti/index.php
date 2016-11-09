<?php
include './fakulteti.php';
use Fakultet\Fakultet;

$fakulteti = Fakultet::getAll();
?>
<html>
    <head>
        <title>Fakulteti</title>
    </head>
    <body>
        <ul>
            <?php foreach ($fakulteti as $fakultet) {
                echo "<li>{$fakultet->id}. {$fakultet->ime}</li>";
            }
?>
        </ul>
    </body>
</html>