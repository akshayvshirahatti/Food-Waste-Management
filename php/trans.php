<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
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

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
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
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
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

.centered4{
    position: absolute;
    top: 80%;
    left: 50%;
    transform: translate(-50%, -50%);
	color:white;
	font-family:Bradley Hand ITC;
	background-color: #FF8C00;
}
#mySidenav a {
    position: absolute;
    left: -80px;
    transition: 0.3s;
    padding: 15px;
    width: 100px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    border-radius: 0 5px 5px 0;
	
}

#mySidenav a:hover {
    left: 0;
}

#about {
    top: 100px;
    background-color:#333;
	 border-right: 3px solid #FF8C00;
}

#blog {
    top: 180px;
    background-color: 	#333;
 border-right: 3px solid #FF8C00;
}

#projects {
    top: 260px;
    background-color: #333;
	 border-right: 3px solid #FF8C00;
}

#contact {
    top: 340px;
    background-color: #333;
	 border-right: 3px solid #FF8C00;
}

</style>
</head>
<body>

<ul>
  <li><a class="active" href="admin.php">Home</a></li>
  
  
   <li><a href="services.html">Services</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="about.html">About</a></li></ul>
  
  

<div class="form">
<div style="color:#333">------------------------- </div>
<div style="color:#333">------------------------- </div>
<div style="color:#333">------------------------- </div>
<div style="color:#333">------------------------- </div>



<h2><div style="font-size:30px; color:#FF8C00;font-family:Bradley hand itc">View Transactions</div></h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr  style=" color:#FF8C00; font-size:20px;">
<th><strong>S.No</strong></th>
<th><strong>From (Hotel)</strong></th>
<th><strong>Hotel ph no</strong></th>
<th><strong>Date</strong></th>
<th><strong>To (NGO)</strong></th>
<th><strong>Ngo ph no</strong></th>

</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from new_record ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"  style=" color:#FF8C00; font-size:20px"><?php echo $count; ?></td>
<td align="center"  style=" color:#ff8c00;font-size:20px"><?php echo $row["Name"]; ?></td>
<td align="center"  style=" color:#ff8c00;font-size:20px"><?php echo $row["Phonenumber"]; ?></td>
<td align="center"  style=" color:#ff8c00;font-size:20px"><?php echo $row["Address"]; ?></td>
<td align="center"  style=" color:#ff8c00;font-size:20px"><?php echo $row["Email"]; ?></td>
<td align="center"  style=" color:#ff8c00;font-size:20px"><?php echo $row["psw"]; ?></td>
<td align="center"  style=" color:#ff8c00;font-size:20px"><?php echo $row["image"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["id"]; ?>" style=" color:white;">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>" style=" color:white;">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>