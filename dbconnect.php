<?php
global $con;
$con=mysqli_connect("localhost:3307","root","vertrigo") or die(mysqli_error($con));
$db=mysqli_select_db($con,"otp_login") or die(mysqli_error($con));


?>