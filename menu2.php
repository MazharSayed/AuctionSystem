<?php
session_start();

if(empty($_SESSION["UserId"]))
{
	header("location:slogin.php");	
}

echo"<a href='sdisplay.php'>display</a>";

?>


<html>
<head>
<link href="css\bootstrap.min.css"rel="stylesheet">
</head>
<body>
<div>
<nav style="background:teal;" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header"> 
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">view my products</a></li>
<li><a href="#">Delete</a></li>
<li><a href="#">Post Product</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>

</nav>
<br><br><br><br>
<br>
<br><br>
<center>
<h1 style="color:teal;font-size:70;">Online Auction System </h1>
</center> 
</div>
</body>
<html>