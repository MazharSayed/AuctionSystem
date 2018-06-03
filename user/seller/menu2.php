<?php
session_start();

if(empty($_SESSION["UserId"]))
{
	header("location:slogin.php");	
}

//echo"<a href='sdisplay.php'>display</a>";

?>


<html>
<head>
<link href="css\bootstrap.min.css"rel="stylesheet">
<style>
body  {
    background-image: url("black3.jpg");
    background-color: #cccccc;
}
ul li:hover{
	font-size:17px;
}
</style>
</head>

<body>
<div id="div1">
<div>
<nav style="background:teal;" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header"> 
    </div>
    <ul class="nav navbar-nav">
      <li><a href="menu2.php">Home</a></li>
      <li><a href="displaymyimage.php">view my products</a></li>
      <li><a href="sdisplayimage.php">view all products</a></li>
	  <li><a href="supdate.php">edit profile</a></li>
	  <li><a href="sdisplay.php">View profile</a></li>
      <li><a href="uploadimage.php">Post Product</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
		<li><a href="slogout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>

</nav>

</div>
</div>
</body>
<html>