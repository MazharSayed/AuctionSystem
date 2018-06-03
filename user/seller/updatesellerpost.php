<?php
//session_start();
include_once("menu2.php");
$id=$_SESSION["UserId"];
$con=new mysqli("localhost","root","","auctionsystem");

if($con->errno)
{
	$con->errno;
	$con->error;
}
$query = "select * from seller where email='$id'";

if($result = $con->query($query))
{
	$row=$result->fetch_assoc();
}

if(!empty($_POST["update"]))
{
	$con=new mysqli("localhost","root","","auctionsystem");
	
	$productname=$_POST["productname"];
	$description=$_POST["description"];
	$amount=$_POST["amount"];
	
	
	$query="update seller set productname='$productname',description='$description',amount='$amount',dob='$date_of_birth',gender='$gender',mob='$mobile_no',email='$email' where email='$email'";
	
	//die($query);
    $retval=$con->query ($query) or die("error".$con->error);
	
	if($retval)
	{
		echo"updation completed";
	}
	
	



else
{
	
?>

<html>
<head>

<link href="css\bootstrap.min.css"rel="stylesheet">

</head>


<body style="background:lightblue">
<div class="container">
<form action="uploadfile.php" method="POST"enctype="multipart/form-data"class="form-horizontal">

<center><h1 style="background:teal;color:white">Post Product </h1></center>

<div class="form-group">
<label align="center"class="col-sm-4">Product_id:</label>
<div class="col-sm-4">
<input type="number"name="productid" class="form-control">
</div>
</div>


<div class="form-group">
<label align="center"class="col-sm-4">Product_Name:</label>
<div class="col-sm-4">
<input class="form-control" type="text" name="productname">                         </div> 
</div>


<div class="form-group">
<label align="center"class="col-sm-4">Description:</label>
<div class="col-sm-4">
<textarea class="form-control" type="text" name="description"></textarea>                    
</div>
</div>


<div class="form-group">
<label align="center"class="col-sm-4">Posted by(email):</label>
<div class="col-sm-4">
<input class="form-control" type="email" name="email"> 
</div>
</div>


<div class="form-group">
<label align="center"class="col-sm-4">posted date :</label>
<div class="col-sm-4">
<input type="date" class="form-control"name="posteddate">
</div>
</div>



<input type="hidden"name="MAX_FILE_SIZE"value="2000000">

<div class="form-group">
<label class="col-sm-4"align="center">Select Product :</label>
<div class="col-sm-4">
<input align="center" name="userfile"type="file">
</div>

</div>
<div class="form-group">
<label class="col-sm-4"align="center">base amount :</label>
<div class="col-sm-4">
<input align="center" name="amount"type="text"class="form-control">
</div>
</div>

<div class="form-group">
<label class="col-sm-4"align="center">Contact:</label>
<div class="col-sm-4">
<input align="center" name="contact"type="text"class="form-control">
</div>
</div>

<div class="form-group">
<label class="col-sm-4"></label>
<div class="col-sm-4">
<input  type="submit" class="form-control"name="upload" value="Upload"style="background:teal;color:white;">
</div>
</div>
</form>
</div>
</body>
</html>

