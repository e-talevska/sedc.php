<html>
    <head>
        <title>List Files</title>
    </head>
    <body>
<?php 
$extension = ['jpg','png','gif'];
  $dir_contents = scandir("uploads");
  var_dump($dir_contents);
  foreach ($dir_contents as $file_name) {
      //niza
      $pathinfo = pathinfo("uploads/" . $file_name);
      if(in_array($pathinfo['extension'],$extension)){ ?>
        <img src="uploads/<?php echo $file_name; ?>"> 
        <?php
      }
}
    ?>
    </body>
</html>
