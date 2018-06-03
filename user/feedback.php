 <?php
 include("menu.php");
if(!empty($_POST["submit"]))
{
include("dbconfig.php"); 
 $email=$_POST["email"];
 $feedbacktitle=$_POST["feedbacktitle"];
 $feedback=$_POST["feedback"];
 
 $query="insert into feedback(email,feedbacktitle,feedback)values('$email','$feedbacktitle','$feedback')";
 
 $retval=$con->query ($query) or die("error".$con->error);
	
	if($retval)
	{
		//echo"feedback submitted";
		header("location:displayfeedback.php");
	
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
<style>
label{
	color:white;
}
</style>

</head>


<body>
<center>
<div style="height:700;">
<form class="form-horizontal"name="myform"onsubmit="return validateform" method="POST">
<h1 style="background:teal;color:white">Feedback</h1><br><br>
<div class="form-group">
<label class="col-sm-4">email</label>
<div class="col-sm-4">
<input type="email"name="email"class="form-control">
</div>
</div>

<div class="form-group">
<label class="col-sm-4">Feedback title</label>
<div class="col-sm-4">
<input type="text" name="feedbacktitle"class="form-control">
</div>
</div>

<div class="form-group">
<label class="col-sm-4">Feedback </label>
<div class="col-sm-4">
<textarea  rows="5"name="feedback"class="form-control"></textarea>
</div>
</div>
<br>
<div class="form-group">
<label class="col-sm-4"></label>
<div class="col-sm-4">
<input type="submit"style="background:teal;color:white;"class="form-control"onclick="return validateform" name="submit" value="Submit">
</div>
</div>

</div>
</center>
</form>
</body>
</html>
<?php
}