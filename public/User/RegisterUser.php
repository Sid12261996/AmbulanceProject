<?php
$firstname=$_POST['Firstname'];
$lastname=$_POST['LastName'];
$mobile=$_POST['Mobile'];
$email=$_POST['Email'];
$password=$_POST['Password'];
$cpassword=$_POST['CPassword'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'ambulance');
$q="INSERT into user (Firstname,LastName,Mobile,Email,Password,CPassword) values('$firstname','$lastname','$mobile','$email','$password','$cpassword')";
mysqli_query($con,$q);

mysqli_close($con);

header('location:http://localhost/Amb/First.php');
?>
