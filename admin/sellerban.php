<?php
include_once("menu3.php");
$con=new mysqli("localhost","root","","auctionsystem");

$email=$_GET["email"];

$sql="update  seller set ban=true where email='$email'";
//$retval=$con->query($sql);
//if($con->affected_rows>0)
	if($con->query($sql)===true)
{
	echo "seller baned successfully";
	
}
else
{
	echo"error while ban the  record:".$con->error;
}

?>

