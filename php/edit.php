<?php
require('db.php');
$is_approve=$_REQUEST['is_approve'];
$email=$_REQUEST['email'];
$query = "UPDATE `registers_details` SET `is_approve`=1 WHERE (`is_approve`= 0)";
$result = mysqli_query($con,$query) or die ( mysqli_error());
$sql="INSERT INTO `users`(`email`, `PhoneNumber`, `address`, `psw`,`Name`) SELECT `email`,`PhoneNumber`,`address`,`psw`,`Name` FROM `registers_details` WHERE `email`='$email'";
$res=mysqli_query($con,$sql);
header("Location: viewR.php"); 
?>