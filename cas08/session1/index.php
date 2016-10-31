<?php 
session_start();
$cost= isset($_SESSION['cost'])? "Cehnata e:" . $_SESSION['cost']:"";
$km=  isset($_SESSION['km'])? $_SESSION['km']:"";
$fe=  isset($_SESSION['fe'])? $_SESSION['fe']:"";
$fp=  isset($_SESSION['fp'])? $_SESSION['fp']:"";
$errors = isset($_SESSION['validation'])? $_SESSION['validation']:[];
session_destroy();
?>
<html>
    <head>
        <title>Calculate trip cost</title>
    </head>
    <body>
        <div>
            <?php echo $cost; ?>
        </div>
<form action="process_form.php" method="get">
            <p>
            <lable for="km">km</lable>
            <input value="<?php echo $km; ?>" name="km" id="km"> 
            <span class="error"> 
            <?php echo isset($errors['km'])? $errors['km'] : ""; ?>
            </span>
            </p>
            <p>
            <lable for="fe">Fuel efficency</lable>
            <input value="<?php echo $fe; ?>"  name="fe" id="fe" > 
            <span class="error">
                <?php echo isset($errors['fe'])? $errors['fe'] : ""; ?>
            </span>
            </p>
           <p>
            <lable for="fp">Fuel</lable>
            <input value="<?php echo $fp; ?>" name="fp" id="fp" > 
            <span class="error">
                <?php echo isset($errors['fp'])? $errors['fp'] : ""; ?>
            </span
            </p>
            <p>
            <!--<input type="submit">-->
                <button name="Calc" type="submit">Calculate</button>   
            </p>
        </form>
    </body>
</html>
