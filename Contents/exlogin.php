<html>
<head>
<title>User Login</title>

	<link href="../Style/style.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<div id="header">
		<h1>LOGIN</h1>
	</div>

	<div id="page">
		<div id="login">
			<form action="loginproc.php" method="post">
			Username
			<input type="text" name="username" />
			
			Password
			<input type="password" name="password" />
			<h3><input type="submit" value="Login" /></h3>
			</form>
			Tidak Punya Akun?
			<a href="register.php">Register</a>
		</div>
	</div>
</body>
</html>