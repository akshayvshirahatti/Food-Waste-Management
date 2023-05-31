<!doctype html>
<?php
 
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "waste";
   $conn = new mysqli($servername, $username, $password, $dbname);
 if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
	 
$checkbox1=$_POST['chk1'];
if(isset($_POST['submit'])){
$email=$_POST['email'];
$quantityV=$_POST['quantityV'];
$quantityNV=$_POST['quantityNV'];
$b=implode(",", $checkbox1);
$sql="INSERT INTO `food_detail` (`email`,`food_type`, quantityV, quantityNV)
     VALUES ((SELECT `email` FROM `registers_details` WHERE `email`='$email'),'$b',$quantityV,$quantityNV)";
$res=mysqli_query($conn,$sql);

if($res){
header("location:profileR.html");
}else{}


}

   mysqli_close($conn);

?>