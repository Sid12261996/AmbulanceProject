
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <title>Ambulance</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<script type="text/javascript" src="Bingmap.js"></script>

  	<link href="CSS/Inside.css" rel="stylesheet" />
  </head>
  <body id="grad1" >

<!--Navbar-->
<nav class="navbar navbar-expand-md">
<div class="container-fluid text-center">
    <div class="navbar-header">
	  <h1 class="navbar-brand">SOS ALERT!!!</h1>
    </div>
		<button class="btn btn-success my-2 my-sm-2" type="submit"><a href="FirstUser.php">Back</a></button>
</div>
</nav>

<!--googleapis-->
<script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap' async defer></script>
<div id ="myMap">  </div>

<div class="Inputs">

  <!-- <script src="Direction.js" type="text/javascript" > -->

</script>
  <br>From:<input type="text" id="from_place" name="" value="" placeholder="Enter your Location ">
  To:<input type="text" id="to_place" name="" value="" placeholder="Enter your Destination"><br>
  <button type="button" name="button" onclick="GetDirection()" class="btn btn-success my-2 my-sm-2">Get Direction</button>
  <div id="directionsItinerary">

  </div>
</div>


  </body>
</html>
