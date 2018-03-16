<?php 
$con = mysqli_connect("localhost","root","","wp");
$neworigin = $_GET['neworigin'];
$newdestination = $_GET['newdestination'];
$newflightno = $_GET['newflightno'];
$newdeparture = $_GET['newdeparture'];
$newarrival = $_GET['newarrival'];
$newfare = $_GET['newfare'];
$newdate = $_GET['newdate'];
$seats = $_GET['seats'];

$statement = "insert into flight1 values 
('$neworigin','$newdestination','$newflightno','$newdeparture','$newarrival','$newfare','$newdate','$seats')";

$res = mysqli_query($con ,$statement);
mysqli_close($con);
?>