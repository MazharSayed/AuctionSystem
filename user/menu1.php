<?php
session_start();

if(empty($_SESSION["UserId"]))
{
	header("location:login.php");	
}

//echo"<a href='display.php'>display</a>";

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
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="update.php">Edit profile</a></li>
      <li><a href="displayimage.php">view product</a></li>
      <li><a href="display.php">view profile</a></li>
	  <li><a href="feedback.php">feedback</a></li>


	  </ul>
    <ul class="nav navbar-nav navbar-right">
      
	  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>

</nav>

