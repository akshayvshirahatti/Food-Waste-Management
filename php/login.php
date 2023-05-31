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
  
if(isset($_POST['login']))  
{  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['psw'];  
  
    $check_user="SELECT * FROM users WHERE email='$user_email' AND psw='$user_pass'";  
  
    $run=mysqli_query($conn,$check_user);  
  if($run){
    echo " successfully";
  }
    if(mysqli_num_rows($run))  
    {  
        header("Location: profileR.html");

  
        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "Email or password is incorrect!";  
    }  
}  
?>  
