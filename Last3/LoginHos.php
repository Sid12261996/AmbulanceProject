<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>LogIn Form</title>
		<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="loginbox">
		<img src="Img/user.jpg" class="avatar">
			<h1><u>LOGIN HERE</u></h1>

			<form method="post" action="SignupHos.php">
				<p>Hospital Refrence ID</p>
				<input type="text" name="username" placeholder="Enter Reference ID">
				<p>Password</p>
				<input type="password" name="password" placeholder="Enter Password"><br><br>
				<input type="submit" name="login" value="Login"><br><br>
				<small>Don't have an account? </small><br><a href="signup.php"><u>SignUp Here</u></a>
			</form>

	</div>
</body>
</html>
