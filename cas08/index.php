<?php
session_start();
$cost = isset($_SESSION['cost']) ? "Cenata e: " . $_SESSION['cost'] : "";
$km = isset($_SESSION['km']) ? $_SESSION['km'] : "";
$fe = isset($_SESSION['fe']) ? $_SESSION['fe'] : "";
$fp = isset($_SESSION['fp']) ? $_SESSION['fp'] : "";
$errors = isset($_SESSION['validation']) ? $_SESSION['validation'] : [];
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
                <label for="km">Km</label>
                <input value="<?php echo $km; ?>" name="km" id="km" >
                <span class="error">
                    <?php echo isset($errors['km']) ? $errors['km'] : ""; ?>
                </span>
            </p>
            <p>
                <label for="fe">Fuel efficency</label>
                <input value="<?php echo $fe; ?>" name="fe" id="fe" >
                <span class="error">
                    <?php echo isset($errors['fe']) ? $errors['fe'] : ""; ?>
                </span>
            </p>
            <p>
                <label for="fp">Fuel Price</label>
                <input value="<?php echo $fp; ?>" name="fp" id="fp" >
                <span class="error">
                    <?php echo isset($errors['fp']) ? $errors['fp'] : ""; ?>
                </span>
            </p>
            <p>
                <button name="calc" type="submit">Calculate</button>
            </p>
        </form>
    </body>
</html>

