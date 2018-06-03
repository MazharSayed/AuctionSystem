<link href="css\bootstrap.min.css"rel="stylesheet">

<style>

body  {
    background-image: url("black4.jpg");
    background-color: #cccccc;
}
td{
	color:white;
}
th{
	color:white;
}
</style>
<?php
//session_start();
include_once("menu3.php");
$id=$_SESSION["UserId"];
//$email=$_SESSION["email"];
//die($id);
include("dbconfig.php");
if($con->errno)
{
	$con->errno;
	$con->error;
}
$query = "select * from feedback where email='$id'";
//die($query);
if($result = $con->query($query))
{
	/*fetch object array*/
	echo"<div class='container'>
	<div class='tabel-responsive'>
	<table class='table tabel-hover'>
<thead>	
<tr>

		 <th>email</th>
		 
		 <th>feedbacktitle</th>
		 <th>feedback</th>
		 
		 </tr>
		 </thead>";
	
	while ($row = $result->fetch_assoc()){
		
		$email=$row["email"];

?>
<tbody>
	 <tr>
	 <td><?php echo $row["email"]?>
	 </td>
	 
	 <td><?php echo $row["feedbacktitle"]?>
	 </td>
	 <td><?php echo $row["feedback"]?>
	 </td>

</div>
<?php

	}

	/*free result set*/
	$result->close();
}
else
{
	echo("eror".$con->error);
}
/*close connection*/
$con->close();
?>

