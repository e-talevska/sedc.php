<html>
    <head>
        <title>
            <?php 
                if(isset($title) && is_string($title)) {
                    echo $title; 
                } else {
                    echo "Default";
                }                
            ?></title>
    </head>