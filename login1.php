<?php
if(!empty($_POST["submit"]))
{
	$email=$_POST["email"];
	$password=$_POST["password"];
	
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

				var password=document.forms["myform"]["password"].value;
				
				 if(email=="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$")
		       {
			    alert("email id must be filled");
				return false;
		        }
				if(email=="")
				{
					alert("email must be filled");
					return false;
				}
				
				
				
				if(password=="")
				{
					alert("password must be given");
					return false;
				}
				
			}
	</script>			
</head>
<body>
<div style="background:lightgray;height:700px;"class="container-fluid">

<form class="form-horizontal"name="myform"onsubmit="return validateform()"method="post"action="#">

<h1 class="text text-center"style="background:#66004d;color:white;"> Login</h1>
<center><br><br>
<div class="form-group">
<label class="col-sm-4">Email :</label>
<div class="col-sm-4">
<input type="email"class="form-control"name="email">
</div>
</div>

<div class="form-group">
<label class="col-sm-4">Password :</label>
<div class="col-sm-4">
<input type="password"class="form-control"name="password">
</div>
</div>
<br><br>
<div class="form-group">
<label class="col-sm-4"> </label>
<div class="col-sm-4">
<input type="submit"class="form-control"name="submit"onclick="return validateform()"value="Login"style="background:#66004d;color:white">
</div>
</div>
<div class="form-group">
<label class="col-sm-12">to register <a href="registration.php">click here</a></label>

</div>
</form>

</div>
</center>
</body>

</html>
<?php
}