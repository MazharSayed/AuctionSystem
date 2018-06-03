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
	
	$firstname=$_POST["fn"];
	$lastname=$_POST["ln"];
	$address=$_POST["address"];
	$date_of_birth=$_POST["dob"];
	$gender=$_POST["gender"];
	$mobile_no=$_POST["mob"];
	$email=$_POST["email"];
	$password=$_POST["pass"];
	
	$query="update seller set fn='$firstname',ln='$lastname',address='$address',dob='$date_of_birth',gender='$gender',mob='$mobile_no',email='$email' where email='$email'";
	
	//die($query);
    $retval=$con->query ($query) or die("error".$con->error);
	
	if($retval)
	{
		echo'<p style="color:white;">updation completed</p>';
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
				var firstname=document.forms["myform"]["fn"].value;
				var lastname=document.forms["myform"]["ln"].value;
	     		var address=document.forms["myform"]["address"].value;
				var date_of_birth=document.forms["myform"]["dob"].value;
				var gender=document.forms["myform"]["gender"].value;
				var mobile_no=document.forms["myform"]["mob"].value;
				var email=document.forms["myform"]["email"].value;
				var password=document.forms["myform"]["pass"].value;
				if(firstname=="")
				{
					alert("firstname must be filled");
					return false;
				}
				
				if(lastname=="")
				{
					alert("lastname must be filled");
					return false;
				}	
                if(address=="")
                {
				alert("address must be filled");
				return false;
				}	
                if(date_of_birth=="")
                {
				alert("dob must be filled");
				return false;
				}
                if(gender=="")
                {
				alert("gender must be selected");
				return false;
				}	
                if(mobile_no=="")
                {
				alert("mobile_no must be filled");
				return false;
				}	
                 if(email=="")
                {
				alert("email must be filled");
				return false;
				}	
				 if(email=="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$")
		       {
			    alert("email id must be filled");
				return false;
		        }
                if(password=="")
                {
				alert("password must be filled");
				return false;
				}					
			}
</script>
</head>
<style>

label{
color:white;}
</style>
<body>
<div style="height:700;" class="container-fluid">


<h1 class="text-center"style="background:teal;color:white;"><marquee style="width:500">Update Profile</marquee></h1><br>

<form action="#"class="form-horizontal"onsubmit="return validateform()" method="POST"name="myform">
<div class="form-group">
<label class="col-sm-2">First Name :</label>
<div class="col-sm-3">
<input type="text" value="<?php echo$row["fn"]?>"class="form-control" name="fn">
</div>
<label class="col-sm-2">Last Name :</label>
<div class="col-sm-3">
<input type="text" value="<?php echo$row["ln"]?>"class="form-control" name="ln">
</div>
</div>


<div class="form-group">
<label class="col-sm-2">Address :</label>
<div class="col-sm-3">
<input class="form-control"value="<?php echo$row["address"]?>"name="address">
</div>
<label class="col-sm-2">Date of birth :</label>
<div class="col-sm-3">
<input type="date" class="form-control"value="<?php echo$row["dob"]?>"name="dob">
</div>
</div>


<div class="form-group">
<label class="col-sm-2">Gender :</label>
<div class="col-sm-3">
<label><input type="radio" name="gender"value="male">Male</label><br>
<label><input type="radio" name="gender"value="female">Female</label><br>
<label><input type="radio" name="gender"value="other">Other</label><br>

</div>
<label class="col-sm-2">Mobile No. :</label>
<div class="col-sm-3">
<input type="text"class="form-control"pattern="(7|8|9)\d{9}"value="<?php echo$row["mob"]?>"name="mob">
</div>
</div>

<div class="form-group">
<label class="col-sm-2">Email :</label>
<div class="col-sm-3">
<input type="email"class="form-control"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2-3}"value="<?php echo$row["email"]?>"name="email">
</div>
<label class="col-sm-2">Password</label>
<div class="col-sm-3">
<input type="password"class="form-control"name="pass"  pattern=".{8,16}" >
</div>
</div><br><br>

<label class="col-sm-4"></label>
<div class="col-sm-4">
<input type="submit"class="form-control"name="update"onclick="return validateform()"value="update"style="background:teal;color:white;">
</div>
</form>
</body>
</html>
<?php
}