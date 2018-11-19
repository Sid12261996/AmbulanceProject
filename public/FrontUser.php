<html>
<head>
  <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Red Plus</title>
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  	<link href="CSS/Front1.css" rel="stylesheet" />
	<link rel="stylesheet" href="CSS/FAQ.css"/>
	<style>
		.change{font-family:helvetica;color:white;}
	</style>
</head>
<body class="fbody">
<div class="super_container">
<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
	
  	<a class="navbar-brand navlogo" href="FrontUser.php">Red <b style="color:red; font-size:50px;">+</b></a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
  	<span class="navbar-toggler-icon bg-light"></span>
  	</button>
  	<div class="collapse navbar-collapse" id="navbarResponsive">
  		<ul class="navbar-nav ml-auto">
  			<li class="nav-item active">
  				<a class="nav-link btn-outline-light" href="FrontUser.php"><b>Home</b></a>
  			</li>
  			<li class="nav-item">
  				<a class="nav-link btn-outline-light" href="AboutUs.php"><b>About Us</b></a>
  			</li>
  			<li class="nav-item">
  				<a class="nav-link btn-outline-light" href="InsideBing.php"><b>Emergency</b></a>
  			</li>
  			<li class="nav-item">
  				<a class="nav-link btn-outline-light" href="joinUs.php"><b>Join Us</b></a>
  			</li>
  			<li class="nav-item">
  				<a class="nav-link btn-outline-light" href="contactUs.php"><b>Contact</b></a>
  			</li>
  		</ul>
  	</div>
  </div>
</nav>
<!--Modal for User-->
  <div class="modal fade" id="showModal" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
  	<div class="modal-content">
  	<div class="modal-header">
  	<span class="Sup"><h5>SignUp</h5></span>
  	<button type="button" class="close" data-dismiss="modal"  aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
  </div>
  	<form action="" method="post">
  		<div style="background-color:#F4F6F7;" class="modal-body text-center">

  			<table align="center" cellpadding="8px">
            <tr>
              <td>First Name:</td>
              <td><input type="text" name="FirstName" style="border-radius:10px;" placeholder="First Name" class="Textbox" id="Fname"></td>
            </tr>

            <tr>
              <td>Last name</td>
              <td><input type="text" name="LastName" style="border-radius:10px;" placeholder="Last Name" class="Textbox"></td>
            </tr>

            <tr>
              <td>Mobile number</td>
              <td><input type="text" name="Mobile" style="border-radius:10px;" value="" placeholder="10 Digits only" class="Textbox"></td>
            </tr>

            <tr>
              <td>Email</td>
              <td><input type="email" name="Email" style="border-radius:10px;" value="" class="Textbox"></td>
            </tr>

            <tr>
              <td>Password</td>
              <td> <input type="password" name="Password" style="border-radius:10px;" value="" class="Textbox"></td>
            </tr>

            <tr>
              <td>Confirm password</td>
              <td><input type="password" name="CPassword" style="border-radius:10px;" value="" class="Textbox"></td>
            </tr>

            <tr>
              <td colspan="2" rowspan="2"><button style="border-radius:10px;margin-left:40%;width:120px;padding:8px;" type="submit" name="ModButton" class="btn-success curve" id="submitbtn">Sign Up</button></td>
            </tr>
          </table>
  		</div>

  	</form>
  </div>
  </div>
  </div>

  <div class="modal fade" id="showModal2" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
    <span class="Sup"><h5>SignIn</h5></span>
    <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
  </div>
    <form action="" method="post">
      <div style="background-color:#EEECEC;" class="modal-body text-center">

        <table align="center" cellpadding="8px">
            <tr>
              <td>Ambulance ID</td>
              <td><input type="text" name="AmbID" style="border-radius:10px;" placeholder="Ambulance ID" class="AmbID"></td>
            </tr>

            <tr>
              <td>Password</td>
              <td><input type="password" name="AmbPass" style="border-radius:10px;" placeholder="Password" class="AmbPass"></td>
            </tr>

            <tr>
              <td colspan="2" rowspan="2"><button type="submit" class="btn-success curve" style="border-radius:10px;width:120px; padding:8px;margin-left:40%" name="AModButton"  id="submitbtn">SignIn</button></td>
            </tr>
          </table>
      </div>

    </form>
  </div>
  </div>
  </div>

  </br>
<!--Form-->
<div class="container-fluid col-md-12 text-center padding">
<p style="color:white;font-family:helvetica;font-size:30px;">Find the right Ambulance.Get the best service.<p>
  <form action="" method="post">
  <h3 style="color:white;font-family:helvetica;">Login</h3><br/>
    <table align="center" cellpadding="8px">
      <tr>
        <td><b class="change">Email ID<b/></td>
        <td><input type="text" class="change" style="border-radius:10px;" name="Email" /></td>
      </tr>
      <tr>
        <td><b class="change">Password</b></td>
        <td><input type="password"  class="change" style="border-radius:10px;" name="Password" /></td>
      </tr>
    </table>
    <div class="signup"><br/>
      <h6 class="change" >New member? Sign Up <a href="" data-toggle="modal" data-target="#showModal" class="change" >Here</a></h6>
      <h6 class="change" >Ambulance: SignIn <a href="" data-toggle="modal" data-target="#showModal2" class="change" >Here</a></h6><br/>
      <button type="submit" name="login" class="btn-success curve" class="change">LogIn</button>
    </div>
  </form>
  <h6 class="change">Or</h6>
  <button type="button" style="width:130px;vertical-align:center;" class="btn curve"><a href="InsideBing.php" class="change">Emergency</a></button>
</div>
<br/><br/><br/><br/><br/><br/>
<!--Footer-->
<footer class="footer">
<div class="container-fluid padding">
<div class="row text-center padding">
	<div class="col-md-4">
    <div class="newsletter_title"><h2>Subscribe</h2><hr class="hr"></div>
    <form action="#" id="newsletter_form" class="newsletter_form">
      <input type="email" class="newsletter_input" placeholder="Your E-mail" required="required">
      <button class="newsletter_button">Subscribe</button>
    </form>
  </div>
	<div class="col-md-4">
    <div class="footer_list_title"><h2>Useful Links</h2><hr class="hr"></div>
    <ul>
      <li><a href="FrontUser.php">Home</a></li>
      <li><a href="AboutUs.php">About us</a></li>
      <li><a href="FAQ.php">FAQ</a></li>
      <li><a href="UsWhy.php">Why us</a></li>
      <li><a href="joinUs.php">Join us</a></li>
    </ul>
  </div>
	<div class="col-md-4">
    <div class="footer_list_title"><h2>Find Us</h2><hr class="hr"></div>
    <ul>
      <li><a href="https://www.youtube.com/">Youtube</a></li>
      <li><a href="https://www.facebook.com">Facebook</a></li>
      <li><a href="https://www.instagram.com/accounts/login/">Instagram</a></li>

    </ul>
</div>
	</div>
  <hr class="hr2">
	<div class="col-12">
    <div class="copyright_bar text-center">
      <span>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Handcrafted by <b class="red">Red Plus</b> Team</span>
    </div>
	</div>
</div>
</div>
</footer>

	</div>
  </body>
</html>
<?php
/* User login page php*/
		if(isset($_POST["login"])){

if(!empty($_POST['Email']) && !empty($_POST['Password'])) {
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

    $con=mysql_connect('localhost','root','') or die(mysql_error());
    mysql_select_db('ambulance') or die("cannot select DB");

    $query=mysql_query("SELECT * FROM userinfo WHERE Email='".$Email."' AND Password='".$Password."'");
    $numrows=mysql_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbEmail=$row['Email'];
    $dbPassword=$row['Password'];
    }

    if($Email == $dbEmail && $Password == $dbPassword)
    {
		echo'<script>window.location="InsideBing.php";</script>';

    }
    } else {
    echo '<script>alert("Invalid email or password!")</script>';
    }

} else {
    echo '<script>alert("All fields are required!")</script>';
}
}
/*Ambulance signin*/
		if(isset($_POST["AModButton"])){

if(!empty($_POST['AmbID']) && !empty($_POST['AmbPass'])) {
    $AmbID=$_POST['AmbID'];
    $AmbPass=$_POST['AmbPass'];

    $con=mysql_connect('localhost','root','') or die(mysql_error());
    mysql_select_db('ambulance') or die("cannot select DB");

    $query=mysql_query("SELECT * FROM ambulanceinfo WHERE AmbID='".$AmbID."' AND AmbPass='".$AmbPass."'");
    $numrow=mysql_num_rows($query);
    if($numrow!=0)
    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbAmbID=$row['AmbID'];
    $dbAmbPass=$row['AmbPass'];
    }

    if($AmbID == $dbAmbID && $AmbPass == $dbAmbPass)
    {
		echo'<script>window.location="InsideBing.php";</script>';

    }
    } else {
    echo '<script>alert("Invalid email or password!")</script>';
    }

} else {
    echo '<script>alert("All fields are required!")</script>';
}
}
/* User Registation page php*/
if(isset($_POST['ModButton']))
        {
			$FirstName=$_POST['FirstName'];
				$LastName=$_POST['LastName'];
				$Mobile=$_POST['Mobile'];
				$Email=$_POST['Email'];
				$Password=$_POST['Password'];
				$CPassword=$_POST['CPassword'];
			if(empty($FirstName) && empty($LastName) && empty($Mobile) && empty($Email) && empty($Password) && empty($CPassword))
			{
				echo '<script>alert("All fields are required!")</script>';

			}
			else
			{

					$con=mysql_connect('localhost','root','') or die(mysql_error());
					mysql_select_db('ambulance') or die("cannot select DB");
					$query="INSERT INTO userinfo(FirstName,LastName,Mobile,Email,Password,CPassword)values('".$FirstName."','".$LastName."','".$Mobile."','".$Email."','".$Password."','".$CPassword."')";
					$result=mysql_query($query) or die(mysql_error());
						{
							if($result>0)
							echo'<script>alert("You have successfully signup")</script>';


						}

			}


		}

?>
