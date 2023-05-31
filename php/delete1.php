<?php
require('db.php');
$email=$_REQUEST['email'];
$query = "DELETE FROM `registers_details_ngo` WHERE `email`='$email'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: viewR.php"); 
?>