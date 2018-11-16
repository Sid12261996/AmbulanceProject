<?php
$username=$_POST['username'];
$userpass=$_POST['userpassword'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'Ambulance');
$q="select * from "yaha Ambulance ki table quotes hata ke" WHERE Username='".$username."'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);

if($row['Username']==$username)
{
  header('location:https://localhost/Last/InsideBing.php');
}
else {
  header('location:https://localhost/Last/FirstAmb.php');
}
?>
