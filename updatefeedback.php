<?php
$con=new mysqli("localhost","root","","auctionsystem");

if($con->errno)
{
	$con->errno;
	$con->error;
}
$query = "select * from feedback where email='rmk@gmail.com'";

if($result = $con->query($query))
{
	$row=$result->fetch_assoc();
}

if(!empty($_POST["update"]))
{
	$con=new mysqli("localhost","root","","auctionsystem");
	
	$email=$_POST["email"];
 $feedbacktitle=$_POST["feedbacktitle"];
 $feedback=$_POST["feedback"];
	$query="update feedback set email='$email',feedbacktitle='$feedbacktitle',feedback='$feedback' where email='$email'";
	
	//die($query);
    $retval=$con->query ($query) or die("error".$con->error);
	
	if($retval)
	{
		echo"feedback is updated";
	}
	
	
}
else
{
	?>
<html>
<head>
<link href="css\bootstrap.min.css"rel="stylesheet">

<script>
function validateform()
{
	var email=document.forms["myform"]["email"].values;
	var email=document.forms["myform"]["feedbacktitle"].values
	var email=document.forms["myform"]["feedback"].values
	
	if(email=="")
	{
		alert("email must be filled");
	}
	 if(email=="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$")
		       {
			    alert("email id must be filled");
				return false;
		        }
	if(feedbacktitle=="")
	{
		alert("feedback title must be filled");
	}
	if(feedback=="")
	{
		alert("feedback must be filled");
	}
}

</script>
</head>
<style>

label{
color:black;}
</style>
<body style="background:lightblue;">
<div style="height:700;" class="container-fluid">
<center>
<form action="#"class="form-horizontal"onsubmit="return validateform()" method="POST"name="myform">
<h1 style="background:teal;color:white">Feedback</h1><br><br>
<div class="form-group">
<label class="col-sm-4">Email</label>
<div class="col-sm-4">
<input type="email"value="<?php echo$row["email"]?>"class="form-control"name="email">
</div>
</div>
<div class="form-group">
<label class="col-sm-4">Feedback title</label>
<div class="col-sm-4">
<input type="text" value="<?php echo$row["feedbacktitle"]?>"name="feedbacktitle"class="form-control">
</div>
</div>

<div class="form-group">
<label class="col-sm-4">Feedback </label>
<div class="col-sm-4">
<textarea  rows="5"name="feedback"class="form-control"><?php echo$row["feedback"]?></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-4"></label>
<div class="col-sm-4">
<input type="submit"class="form-control"name="update"onclick="return validateform()"value="Update"style="background:teal;color:white;">
</div></div></center>
</form>
</body>
</html>
<?php
}	