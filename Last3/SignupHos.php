<?php include('server.php'); ?>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SignUp Form</title>
		<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="loginbox">
		<img src="Img/user.jpg" class="avatar">
			<h1><u>SIGNUP HERE</u></h1>

			<form method="post" action="SignupHos.php">
			<!-- Displays validation errors here-->
			<?php include('ErrorsHos.php'); ?>

				<p>Hospital Refrence ID</p>
				<input type="text" name="username" placeholder="Enter Reference ID" value="<?php echo $username; ?>">

				<p>Password</p>
				<input type="password" name="password_1" placeholder="Enter Password">

				<p>Confirm Password</p>
				<input type="password" name="password_2" placeholder="Confirmed Password">
				<input type="submit" name="signup" value="SignUp">

				<small>Already have an account? </small><a href="LoginHos.php"><u>LogIn Here</u></a>
			</form>
	</div>

</body>
</html>
