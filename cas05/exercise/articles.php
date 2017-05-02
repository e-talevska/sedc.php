<?php
    include 'data.php';
?>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <?php 
            if(isset($_GET['id'])) {
                if(isset($data[ $_GET['id']  ])) {
                    echo "<p>{$data[ $_GET['id']  ]}</p>";
                }
            } else {
                
            }
        ?>
    </body>
</html>
