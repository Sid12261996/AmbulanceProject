<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Red Plus</title>
		<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	  	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	    <link rel="stylesheet" href="CSS/Base2.css">
	    <style> .black{line-height:2em;align:center;margin-left:10%;margin-right:10%;}</style>
	</head>
	<body>

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

		<!--- Header -->
		<div class="head col-md-12 col-sm-12 col-xs-12 text-center">
          <h2 class="font-weight-700 display-block">Why Choose Us</h2><br>
          <div class="text-medium margin-60 md-width-70 sm-width-100">"Our hospital is available to provide various types of facilities to each and every patient.<br>
					Our mission is to deliver high quality, affordable healthcare services to the broader population in India. Our core values are represented by the acronym "iCare", which encompasses availability of all types of help and full Respect for all in an effecient manner. At the same time, we seek to generate a strong financial performance and deliver long-term value to the helpless through the execution of our plans." </div>
    </div>

		<!--- Cards -->
<div class="container-fluid padding">
<div class="row padding text-center">
	<div class="col-md-3">
		<div class="cards">
			<img class="card-img-top" src="Img/stethoscope.png">
			<div class="card-body">
				<h5 class="card-title">Professional Doctors</h5>
				<p class="card-text"><i>Professional doctors are available at 24X7 for any assistance to the patient under their full supervision.</i></p>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="cards">
			<img class="card-img-top" src="Img/blood.png">
			<div class="card-body">
				<h5 class="card-title">Exclusive Blood Bank</h5>
				<p class="card-text"><i>Hospital's own Blood banks are available with all varities of Blood groups for any Emergency/Extensive conditions.</i></p>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="cards">
			<img class="card-img-top" src="Img/syringe.png">
			<div class="card-body">
				<h5 class="card-title">Internal Medicine</h5>
				<p class="card-text"><i>Internal medicine availability is also their at Hospital Campus at very effective prices for all tpes of medicines.</i></p>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="cards">
			<img class="card-img-top" src="Img/ambulance.png">
			<div class="card-body">
				<h5 class="card-title">Emergency services</h5>
				<p class="card-text"><i>Various types of Emergency Ambulances are available 24X7 at every corner of India.</i></p>
			</div>
		</div>
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
	</body>
</html>
