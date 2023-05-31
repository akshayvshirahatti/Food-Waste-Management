<!DOCTYPE html>
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
   
$checkbox1=$_POST['chk1'];
if(isset($_POST['submit'])){
$quant=$_POST['quant'];
echo "Quant: ".$quant;
$br=implode(",", $checkbox1);
$sql="SELECT * from `food_detail` fd,`registers_details` rd where (fd.quantityV= '$quant') or(fd.quantityNV= '$quant') and (fd.food_type='$br') and rd.email=fd.email";


$result=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($result)){
  $email=$rows['email'];
  $name=$rows['Name'];
  $address=$rows['address'];
  $PhoneNumber=$rows['PhoneNumber'];
    echo "email: ".$email."<br>";
    echo "name: ".$name."<br>";
    echo "address: ".$address."<br>";
    echo "phone number: ".$PhoneNumber."<br>";
}

}
        /* header("location: index.php");*/


   mysqli_close($conn);

?>


<html>
<head>
<style>

body {margin:0;
background-color: #333;
font-family: Arial, Helvetica, sans-serif;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 25px 25px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #FF8C00;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color:white;
    padding: 25px 25px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #FF8C00}

.dropdown:hover .dropdown-content {
    display: block;
}


li a {
    display: block;
    color: white;
    text-align: center;
    padding: 25px 25px;
    text-decoration: none;
   border-bottom: 3px solid transparent;
}

li a:hover:not(.active) {
    background-color: #111;
   border-bottom: 3px solid red;
}

.active {
    background-color: #FF8C00;
   border-bottom: 3px solid red;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  color:#FF8c00;
}
h1{  font-size:200px; font-family: Monotype Corsiva; font-style:bold;}
.centered2 {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
  color:white;
  font-family:Bradley Hand ITC;
  font-size:30px;
  
}
.centered3{
    position: absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
  color:white;
  font-family:Bradley Hand ITC;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #333;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: right;
  width: 50%;
   width: auto;
    padding: 10px 18px;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
  float:center;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
  float:center;
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
  
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100px;
    }
}

.centered4{
    position: absolute;
    top: 80%;
    left: 50%;
    transform: translate(-50%, -50%);
  color:white;
  font-family:Bradley Hand ITC;
  background-color: #FF8C00;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
  <form action="transaction.php" method="post" style="align:center; width:100%;height:50%;background-color:white; position:absolute;top:500px;">
  

    <div class="container">
   <label for="email"><b>Enter Email of the required Hotel</b></label>
      <input type="varchar" placeholder="Enter Username" name="email" required>     

  <input type="submit" name="submit" value=" Submit " style="background-color:green; height:40px;">
  <br>
  <br>
  <button type="button" class="cancelbtn" style="float:left"><a href="profileR.html">Cancel</a></button>
  </div>
</form>
</body>
</html>

