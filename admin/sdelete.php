<?php
$con=new mysqli("localhost","root","","auctionsystem");

$email=$_GET["email"];

$sql="delete from seller where email='$email'";

if($con->query($sql)===True)
{
	echo "record deleted successfully";
	
}
else
{
	echo"error in deleting record:".$con->error;
}

?>