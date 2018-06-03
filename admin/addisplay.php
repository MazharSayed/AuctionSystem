<link href="css\bootstrap.min.css"rel="stylesheet">

<?php
session_start();
//$id=$_SESSION["UserId"];

$con=new mysqli("localhost","root","","auctionsystem");

if($con->errno)
{
	$con->errno;
	$con->error;
}
$query = "select * from admin";

if($result = $con->query($query))
{
	/*fetch object array*/
	echo"<div class='container'>
	<div class='table table-responsive'>
	<table class='table table-hover table condensed'>
	<thead>
	<tr>
	
	<th>email</th>
	<th>Delete</th>
	</tr>
	</thead>";
	while ($row = $result->fetch_assoc()){
		
		$email=$row["email"];

?>

<tbody>
		<tr>
		
		<td><?php echo$row["email"]?></td>
		<td><?php echo"<a href='addelete.php?email=$email'>Delete</a>";
		?></td>
		
		</tr>


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



