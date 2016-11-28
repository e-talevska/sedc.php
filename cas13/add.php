<?php
include 'db_conect.php';
if (isset($_POST['insert'])){
    $name=$_POST['name'];
    $position=$_POST['position'];
    $visible=  isset($_POST['visible'])? 1 : 0;
    
    $mysql = new \blog\MySQL();
    $success = $mysql->insertNewMenuItem($name, $position, $visible);
}
?>
<html>
    <head>
        <title>Insert Menu Item</title>
    </head>
    <body>
        <?php
        if(isset($success)&& $success) {
            echo "<h3>Item Inserted</h3>";
        }
        ?>
        <form method="POST">
            
        <p>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </p>
         <p>
            <label for="position">Position</label>
            <input type="text" name="position" id="position">
        </p>
         <p>
            <label for="visible">Visible</label>
            <input type="text" name="visible" id="visible">
        </p>
        <p>
            <button type="submit" name="insert">Insert</button>
        </p>
        </form>
    </body>
</html>
