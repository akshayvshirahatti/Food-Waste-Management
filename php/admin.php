f<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

#abc { top: 420px;
    background-color: #333;
	 border-right: 3px solid #FF8C00;}



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
    background-color: #333;
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
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 50px;
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

table {
     position: absolute;
    top: 200%;
    
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 15px;
}



th {
    background-color: #FF8C00;
    color: white;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	 width: 80%;
}

.button3 {
    background-color:#f44336 ; 
    color: black; 
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #AE3C3C;
    color: white;
}

</style>
</head>
<body>

<ul>
  <li><a class="active" href="admin.php">Home</a></li>
  

   <li><a href="services.html">Services</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="about.html">About</a></li>
 
 
  
</ul>
<p>
 <div class="centered2"> MEET & EAT </div>
 <div class="centered"><h1><b>HungerMitao</b></h1></div>
 <div class="centered3"><h2 style=" font-size:50px"> ALL IN GOOD TASTE </h2></div>
 </P>
 <div id="mySidenav" class="sidenav">
  <a href="viewR.php" id="about">New Hotel Registeration</a>
  <a href="viewNGO.php" id="blog">New NGO Registeration</a>
  <a href="loginR.php" id="contact"> Registered Hotels</a>
  <a href="loginNgo.php" id="projects">Registered NGOs </a>
 <a href="transaction.php" id="abc">Transactions</a>
</div>
</body>
</html>