<html>
    <head>
        <title>Forms</title>
    </head>
    <body>
        <form action="form_process.php" method="post">
            <p>
                <label for="widgets">Widgets</label>
                <input name="widgets" id="widgets" type="text">
            </p>
             <p>
                <label for="tax">Tax rete</label>
                <input name="tax" id="tax" type="text">
            </p>
            <p>
                <!--<input type="submit" >-->
                <button name="calculate" type="submit">Calculate</button>
            </p>
        </form>
    </body>
</html>

