<?php
if(!empty($_POST["reg"]))
{

	$con=new mysqli("localhost","root","","auctionsystem");
		$email=$_POST["email"];
	$password=$_POST["pass"];
	$query="insert into admin(email,pass)values('$email','$password')";
	    $retval=$con->query ($query) or die("error".$con->error);
	
	if($retval)
	{
		echo"registration completed";
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
				var email=document.forms["myform"]["email"].value;
				var password=document.forms["myform"]["pass"].value;
				 if(email=="")
                {
				alert("email must be filled");
				}	
				 if(email=="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$")
		       {
			    alert("email id must be filled");
				return false;
		        }
                if(password=="")
                {
				alert("password must be filled");
				}					
			}
</script>
</head>
<style>

label{
color:black;}
</style>
<body style="background:lightblue">
<div style="height:700;" class="container-fluid">


<h1 class="text-center"style="background:teal;color:white;">REGISTRATION FORM</h1><br>

<form action="#"class="form-horizontal"onsubmit="return validateform()" method="POST"name="myform">
<center><div class="form-group">
<label class="col-sm-4">Email :</label>
<div class="col-sm-4">
<input type="email"class="form-control"name="email">
</div></div>
<div class="form-group">
<label class="col-sm-4">Password :</label>
<div class="col-sm-4">
<input type="password"class="form-control"name="pass">
</div>
</div></center><br><br>

<label class="col-sm-4"></label>
<div class="col-sm-4">
<input type="submit"class="form-control"name="reg"onclick="return validateform()"value="Register"style="background:teal;color:white;">
</div>
</form>
</body>
</html>
<?php
}