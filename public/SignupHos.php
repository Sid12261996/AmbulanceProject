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
    <link rel="stylesheet" href="CSS/Front1.css">
    <style> .black{line-height:2em;align:center;margin-left:10%;margin-right:10%;}</style>
    </head>
<body>
	<div class="super_container">

    <nav class="navbar navbar-expand-md navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand navlogo" href="FrontUser.php">Red <b style="color:red; font-size:50px;">+</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon bg-light"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link btn-outline-light" href="FrontUser.php"><b>Home</b></a>
            </li>
            <li class="nav-item active">
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

	<div class="container-fluid col-md-12 text-center padding">
	<div class="loginbox">
		<img src="Img/user.jpg" class="avatar">
		<form action="" method="post">
			<div style="background-color:#F4F6F7;" class="modal-body text-center">
				<h3 style="color:red">Signup</h3><hr/>
				<table align="center" cellpadding="8px">

				<tr>
				  <td>Hospital Refrence ID</td>
				  <td><input type="text" name="Username" style="border-radius:10px;" placeholder="Enter Reference ID" value=""/></td>
				</tr>

				<tr>
				  <td>Password</td>
				  <td><input type="password" name="Password1" style="border-radius:10px;" placeholder="Enter Password" value=""/></td>
				</tr>

				<tr>
				  <td>Confirm Password</td>
				  <td><input type="password" name="Password2" style="border-radius:10px;"  placeholder="Enter Password" value=""/></td>
				</tr>

				<tr>
				  <td colspan="2" rowspan="2"><button style="border-radius:10px;background-color:#E59866;margin-left:40%;padding:8px; width:150px;" type="submit" name="sign" class="" id="submitbtn">Sign Up</button></td>
				</tr>
				</table>
				<small class="black">Already have an account? </small><a href="LoginHos.php"><u>LogIn Here</u></a>
			</div>
		</form>
	</div>
	</div>

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
    <div class="col-12 text-center">
      <div class="copyright_bar col-12">
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
if(isset($_POST['sign']))
        {
			$Username=$_POST['Username'];
			$Password1=$_POST['Password1'];
			$Password2=$_POST['Password2'];

			if(empty($Username) && empty($Password1) && empty($Password2))
			{
				echo '<script>alert("All fields are required!")</script>';

			}
			else
			{
					$con=mysql_connect('localhost','root','') or die(mysql_error());
					mysql_select_db('ambulance') or die("cannot select DB");
					$query="INSERT INTO hospitalinfo(Username,Password1,Password2)values('".$Username."','".$Password1."','".$Password2."')";
					$result=mysql_query($query) or die(mysql_error());
						{
							if($result>0)
							echo'<script>alert("You have successfully signup.")</script>';

						}
			}

		}

?>
