<?php
include_once("menu2.php");
$con=new mysqli("localhost","root","","auctionsystem");

$product_id=$_GET["productid"];

$sql="delete from uploadimage where productid='$product_id'";
$retval=$con->query($sql);
if($con->affected_rows>0)
//if($con->query($sql)===True)
{
	echo '<h style="color:white;">record deleted successfully</p>';
	
}
else
{
	echo"error in deleting record:".$con->error;
}

?>