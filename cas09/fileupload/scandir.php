<html>
    <head>
        <title>List files</title> 
    </head>
    <body>
        <?php
            $extensions = ['jpg', 'jpeg', 'png', 'gif'];
            $dir_contents = scandir("uploads");

            foreach ($dir_contents as $file_name) {
                //niza
                $pathinfo = pathinfo("uploads/" . $file_name);
                if(isset($pathinfo['extension']) && in_array($pathinfo['extension'], $extensions)) { ?>
                    <img src="<?php echo "uploads/" . $file_name; ?>">
                <?php
                }
            }
        ?>
    </body>
</html>
