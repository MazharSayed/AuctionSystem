<?php

if(!empty($_POST["register"]))
{
$con=new mysqli("localhost","root","","matri");
if($con->connect_errno)
{
$con->connect_errno;
$con->connect_error;
}

$email=$_POST["email"];	
$mobile=$_POST["mobile"];
$password=$_POST["password"];


$query="insert into users(email,mobile,password)values('$email','$mobile','$password')";
$retval=$con->query ($query) or die("error".$con->error);
	 
	if($retval)
	{
		echo"Record stored";
	}
	else
	{
		echo"Operation Unsucessful";
	}
}
else
{
?>	


<html>
    <head>
         <title>register</title>
            <link href="style1.css" rel="stylesheet" type="text/css">
			<script>
			function validateform()
			{
				var email=document.forms["myform"]["email"].value;
				var mobile=document.forms["myform"]["mobile"].value;
				var password=document.forms["myform"]["password"].value;
				
				
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
				if(mobile=="")
				{
					alert(" mobile no. must be filled");
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
         <link href="css\bootstrap.min.css" rel="stylesheet">
    <body>
	     <center>
              <header>
			        <h1 style="color:white;">Register</h1>
				</header>
                </center>
			     <br>
				 
               <div class="container">
			     <form onsubmit=return validateform() name="myform" class="login form-horizontal" action="#" method="POST">
					<div class="form-group">
					   <label class="col-sm-4">EMAIL</label>
					     <div class="col-sm-6">
					        <input class="form-control" type="email" id="myemail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
					     </div>
					  </div>   
			   
					<div class="form-group">
                        <label class="col-sm-4">	MOBILE NO.</label>	
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="mobile" >
					    </div>
                    </div>
					  
					   <div class="form-group">
					      <label class="col-sm-4">PASSWORD</label>
					      <div class="col-sm-6">
					         <input class="form-control" type="pwd" name="password">
					     </div>
					   </div>
					   			   
					   <div class="form-group">
					        <label class="col-sm-4"></label>
					          <label class="col-sm-2"></label>
					              <input class= "btn btn-primary col-sm-2"  type="submit" name="register" value="register">
					          </div>
					       </form>
				     </div>
	             </body>
	</html>
<?php
}
?>

				