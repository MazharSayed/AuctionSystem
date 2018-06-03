<?php
include("dbconfig.php");

//die("hi....................");
$bidby=$_GET["bidby"];
$query="select * from biding where bidby='$bidby'";
$result=$con->query($query) or Die("error".$con->error);
if($result->num_rows>0)
{
	while($row=$result->fetch_array())
	{
		
	
	
	echo"productid ".$row["productid"];
	echo"amount ".$row["amount"];
	}
}
else
{
	echo"error while biding....";
}
	

	


?>