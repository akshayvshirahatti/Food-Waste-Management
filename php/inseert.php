<!doctype html>
<?php
 /*include("config.php");
   session_start();*/
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "waste";
   $conn = new mysqli($servername, $username, $password, $dbname);
 if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
	 

if(isset($_POST['submit'])){
$Name= $_POST['Name'];
$address= $_POST['address'];
$PhoneNumber= $_POST['PhoneNumber'];
$psw= $_POST['psw'];
$email= $_POST['email'];
$psw_repeat= $_POST['psw_repeat'];
$filename = addslashes($_FILES['img']['name']);
$tmpname = addslashes(file_get_contents($_FILES['img']['tmp_name']));
$filetype = addslashes($_FILES['img']['type']);
$filesize = addslashes($_FILES['img']['size']);
$array = array('jpg','jpeg');
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if(!empty($filename)){
if(in_array($ext, $array)){
$sql="INSERT INTO `registers_details_ngo`(`Name`, `address`, `PhoneNumber`, `psw`, `email`,`image`) VALUES ('$Name','$address','$PhoneNumber','$psw','$email','$tmpname')";

if(mysqli_query($conn,$sql))
header("location: loginR.html");
}
else{
echo "failed";
}
}



        /* header("location: index.php");*/

}
   mysqli_close($conn);

?>