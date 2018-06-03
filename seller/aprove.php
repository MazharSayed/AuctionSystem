<?php
$prod_id=$_GET["prod_id"];
$bidby=$_GET["bidby"]; 
$prod_by=$_GET["prod_by"];
include_once("dbconfig.php");
$querytgbidderinfo="select * from seller  where email='$prod_by'";
$result=$con->query ($querytgbidderinfo) or die("error".$con->error);

if($result->num_rows>0)
{
	$row = $result->fetch_assoc();
	$b_name=$row["fn"]." ".$row["ln"];
	//die($b_name);
$query="insert into bidallocation values('$prod_id','$prod_by','$bidby','$b_name')";
$retval=$con->query ($query) or die("error".$con->error);
	 
	if($retval)
	{
		
		$querytoupdate="update uploadimage set sold=true where productid=$prod_id";
	$resulttupdate=$con->query ($querytoupdate) or die("error".$con->error);
	 
	if($resulttupdate)
	{
		echo"Bid Aproved";
	}
	else
	{
		echo"error occured";
	}
}
}
	

?>