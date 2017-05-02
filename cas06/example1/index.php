<html>
    <head>
        <title>Forms</title>
    </head>
    <body>
        <form action="form_process.php" method="post">
            <p>
                <label for="username">Username</label>
                <input name="username" id="username" type="text">
            </p>
             <p>
                <label for="pass">Password</label>
                <input name="password" id="pass" type="password">
            </p>
            <p>
                <!--<input type="submit" >-->
                <button name="login" type="submit">Login</button>
            </p>
        </form>
    </body>
</html>
