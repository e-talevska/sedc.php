
<!DOCTYPE html>
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
				<label for="password">Password</label>
				<input name="password" id="password" type="password">
			</p>
			<p>
				<label for="email">E-Mail</label>
				<input name="email" id="email" type="email">
			</p>
			<HR>
			<p>
			<button name="login" type="submit">Login</button>
			</p>
		</form>
	</body>
</html>