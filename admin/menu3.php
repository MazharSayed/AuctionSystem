<?php
session_start();

if(empty($_SESSION["UserId"]))
{
	header("location:adlogin.php");	
}

//echo"<a href='addisplay.php'>display</a>";

?>


<html>
<head>
<link href="css\bootstrap.min.css"rel="stylesheet">

<style>
body  {
    background-image: url("black4.jpg");
    background-color: #cccccc;
}
ul li:hover{
	font-size:17px;
}
</style>
</head>
<body>
<div>
<nav style="background:teal;" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header"> 
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="menu3.php">Home</a></li>
      <li><a href="sdisplay.php">View sellers</a></li>
      <li><a href="displayimage.php">View products</a></li>
      <li><a href="ban_seller.php">Ban seller</a></li>
      <li><a href="sdisplaydelete.php">Delete seller</a></li>
      <li><a href="bidallocation.php">bid allocation</a></li>
      <li><a href="displayfeedback.php"> user feedback</a></li>

	  </ul>
    <ul class="nav navbar-nav navbar-right">
     
	  <li><a href="adlogout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>

</nav> 
</div>
</body>
<html>