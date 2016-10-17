<?php
    include 'data.php';
?>
<html>
    <head>
        <title>Articles</title>
    </head>
    <body>
        <?php
            $keys = array_keys($data);
            foreach ($keys as $key) { ?>
                <a href="articles.php?id=<?php echo $key; ?>">Article <?php echo $key + 1; ?></a> <br>
            <?php
            }
        ?>
    </body>
</html>
