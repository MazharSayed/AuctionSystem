<?php
session_start();
if(!empty($_POST["Login"]))
{

$con=new mysqli("localhost","root","","auctionsystem");
if($con->errno)
{
$con->errno;
$con->error;
}

$email=$_POST["email"];
$password=$_POST["pass"];
$queryforemail="select * from users where email='$email' and pass='$password'";
 //die($queryforemail);
$retvalue=$con->query($queryforemail) or die("error".$con->error);
if($row=$retvalue->fetch_assoc())
{
echo"login page";
$_SESSION["UserId"]=$email;
header("location:menu.php");
}
else
{
	$queryformobile="select * from users where mobile='$email' and password='$password'";
	//die(queryformobile);
	$retvalueformobile=$con->query($queryformobile) or die("error".mysql_error());
	if($row=$retvalueformobile->fetch_assoc())
   {
      echo"login page";
	  
	  $_SESSION["UserId"]=$email;
	  header("location:menu.php");
    }
else
{
echo"something went wrong";
}
}

//


}
else
{
?>

<html>
    <head>
	     <title> login</title>
	     <link href="style1.css" rel="stylesheet" type="text/css">
	</head>
	     <link href="css\bootstrap.min.css" rel="stylesheet">
    <body style="background:lightblue">
	        <center>
          	    <header> 
		          <h1 style="background:teal;color:white"> Login</h1>	 
                </header> 
			</center>	
				
             <br>
           <div class="container">
              <form class="login form-horizontal" action="#" method="POST">
                    <div class="form-group">
                         <label class="col-sm-4"> EMAIL or MOBILE </label>
                         <div class="col-sm-4">
                                <input class="form-control" type="email" name="email" placeholder="EMAIL or PHONE"> 						 
	                     </div>
				    </div>	

                     <div class="form-group">
                         <label class="col-sm-4">PASSWORD</label>
                         <div class="col-sm-4">
                             <input class="form-control" type="password" name="pass">
                         </div> 
                     </div>
					 
					 <div class="form-group">
                         <label class="col-sm-2"></label>
                         <label class="col-sm-2"></label>
                         <div class="col-sm-4">
                         <input  type="submit" class="form-control"name="Login" value="Login"style="background:teal;color:white;">
                     </div>
					 </div>
                     <br>


                     <div align="center" class="form-group">
                        <label class ="col-sm-2"></label>
                        <label class="col-sm-2"></label>
                        
                        <label class="col-sm-4">Forgot Password ?</label>
                     </div>
                </form>
            </div>
        </body>
</html>
<?php
}
?>