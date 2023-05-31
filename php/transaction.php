<?php  
  session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "waste";
   $conn = new mysqli($servername, $username, $password, $dbname);
 if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }  
  
if(isset($_POST['submit']))  
{  
    $user_email=$_POST['email'];    
  
    $check_user="SELECT u.Name,u.PhoneNumber,u.email,un.Name from `users` u,`users_ngo` un WHERE u.email='$user_email'";  
  
    $run=mysqli_query($conn,$check_user);  
$rows=mysqli_fetch_array($run);
  $name=($rows[0]);
  $no=($rows[1]);
  $a=($rows[2]);
  $p=($rows[3]);
 echo "hotel_name: ".$name."<br>";
    echo "phone: ".$no."<br>";
    echo "email: ".$a."<br>";
    echo "name_ngo: ".$p."<br>";
$sql="INSERT INTO transaction (Name,PhoneNumber,nam) VALUES ('$name','$no','$p') where `email`='$a'";
$result=mysqli_query($conn,$sql);
if($result){
  header("Location:trans.php");
}
else{
  echo $result;
}   
}
mysqli_close($conn);

?>  
