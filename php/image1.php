<?php
require('db.php');
$email=$_REQUEST['email'];
$sql="SELECT `image`FROM `registers_details_ngo` WHERE `email`='$email'";
$result = mysqli_query($con,$sql) or die ( mysqli_error());
while($row = mysqli_fetch_array($result)){
header("content-type: image/jpeg");
echo "$row[0]";
}
?>