<?php
include("dbconfig.php");
$email=$_GET["email"];

$sql="delete from users where email='$email'";

if($con->query($sql)===True)
{
	echo "record deleted successfully";
	
}
else
{
	echo"error in deleting record:".$con->error;
}

?>