<html>
<head>
  <meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Ambulance</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  	<link href="CSS/First.css" rel="stylesheet" />
</head>
<body id="grad1">

  <div class="modal fade" id="showModal" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
  	<div class="modal-content">
  	<div class="modal-header">
  	<span class="Sup"><h5>SignUp</h5></span>
  	<button type="button" class="close" data-dismiss="modal"  aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
  </div>
  	<form action="Register.php" method="post">
  		<div class="modal-body text-center">

  			<table align="center" cellpadding="8px">
            <tr>
              <td>First Name:</td>
              <td><input type="text" name="Firstname" placeholder="First Name" class="Textbox" id="Fname"></td>
            </tr>

            <tr>
              <td>Last name</td>
              <td><input type="text" name="LastName" placeholder="Last Name" class="Textbox"></td>
            </tr>

            <tr>
              <td>Mobile number</td>
              <td><input type="text" name=" Mobile" value="" placeholder="10 Digits only" class="Textbox"></td>
            </tr>

            <tr>
              <td>Email</td>
              <td><input type="email" name="Email" value="" class="Textbox"></td>
            </tr>

            <tr>
              <td>Password</td>
              <td> <input type="password" name="Password" value="" class="Textbox"></td>
            </tr>

            <tr>
              <td>Confirm password</td>
              <td><input type="password" name="CPassword" value="" class="Textbox"></td>
            </tr>

            <tr>
              <td colspan="2" rowspan="2"><button type="submit" name="ModButton" class="" id="submitbtn">Sign Up</button></td>
            </tr>
          </table>
  		</div>

  	</form>
  </div>
  </div>
  </div>


<!--Carousel-->
  <div class="carousel-inner">
  		<div class="carousel-item active">
  			<img src="Img/Back.jpg" class="Sky">
  			<div class="carousel-caption">
  			<img src="Img/Plus.png" class="Logo" alt="Plus-Logo">

  			</div>
  		</div>
  	</div>
  <img src="Img/logo.png" alt="" id="logoAnimation">
<!--Form-->
<div class="container-fluid col-md-12 text-center padding">


  <form action="LoginUser.php" method="post">
    <table align="center" cellpadding="3px">
      <tr>
        <td>Phone No. / Email ID</td>
        <td><input type="text" name="username" /></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="userpassword" /></td>
      </tr>
    </table>
    <div class="signup">
      <h6>New? Sign Up <a href="" data-toggle="modal" data-target="#showModal" >Here</a></h6>
      <button type="submit" class="btn-success curve">LogIn</button>
    </div>
  </form>

</div>
<div class="animation">

</div>
</body>
</html>
