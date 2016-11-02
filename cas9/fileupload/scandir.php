<?php
$extensions = ['jpg', 'jpeg', 'png', 'gif'];
$dir_contents = scandir('uploads');
var_dump($dir_contents);
foreach ($dir_contents as $filename) {
    $pathinfo = pathinfo('uploads/'.$filename);
    if(isset($pathinfo['extension']) && in_array($pathinfo['extension'], $extensions)) {
        ?>

        <img style="width: 100px; border: 1px solid black; margin: 1px; padding: 5px;"
        src="uploads/<?php echo $filename ?>" >

        <?php
    }
}
?>