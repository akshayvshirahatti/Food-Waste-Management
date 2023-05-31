<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
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
    background-color:#FF8C00;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
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



</style>
</head>
<body>

<ul>
  <li><a class="active" href="admin.php">Home</a></li>
  
  
   <li><a href="">Services</a></li>
  <li><a href="">Contact</a></li>
  <li><a href="">About</a></li></ul>
  
  

<div class="form">
<div style="color:#333">------------------------- </div>
<div style="color:#333">------------------------- </div>
<div style="color:#333">------------------------- </div>
<div style="color:#333">------------------------- </div>



<h2><div style="font-size:30px; color:#FF8C00;font-family:Bradley hand itc">View NGO Registerations</div></h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr  style=" color:#FF8C00; font-size:20px;">
<th><strong>S.No</strong></th>
<th><strong>Email</strong></th>
<th><strong>Phone NO</strong></th>
<th><strong>Address</strong></th>
<th><strong>Password</strong></th>
<th><strong>Name</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="SELECT `email`, `PhoneNumber`, `address`, `psw`,`Name` FROM `users_ngo`";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"  style=" color:#FF8C00; font-size:20px"><?php echo $count; ?></td>
    <td align="center"  style=" color:#ff8c00;font-size:20px"><?php echo $row["email"]; ?></td>
<td align="center"  style=" color:#ff8c00;font-size:20px"><?php echo $row["PhoneNumber"]; ?></td>
<td align="center"  style=" color:#ff8c00;font-size:20px"><?php echo $row["address"]; ?></td>
<td align="center"  style=" color:#ff8c00;font-size:20px"><?php echo $row["psw"]; ?></td>
<td align="center"  style=" color:#ff8c00;font-size:20px"><?php echo $row["Name"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>