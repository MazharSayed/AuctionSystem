<link href="css\bootstrap.min.css"rel="stylesheet">

<?php
session_start();
$id=$_SESSION["UserId"];
//$email=$_SESSION["email"];
$con=new mysqli("localhost","root","","auctionsystem");

if($con->errno)
{
	$con->errno;
	$con->error;
}
$query = "select * from users where email='$id'";

if($result = $con->query($query))
{
	/*fetch object array*/
	echo"<div class='container'>
	<div class='table table-responsive'>
	<table class='table table-hover table condensed'>
	<thead>
	<tr>
	<th>firstname</th>
	<th>lastname</th>
	<th>address</th>
	<th>Date_of_birth</th>
	<th>gender</th>
	<th>mobile_no</th>
	<th>email</th>
	<th>Delete</th>
	</tr>
	</thead>";
	while ($row = $result->fetch_assoc()){
		
		$email=$row["email"];

?>

<tbody>
		<tr>
		<td><?php echo$row["fn"]?></td>
		<td><?php echo $row["ln"]?></td>
		<td><?php echo$row["address"]?></td>
    	<td><?php echo$row["dob"]?></td>
	    <td><?php echo$row["gender"]?></td>
		<td><?php echo$row["mob"]?></td>
		<td><?php echo$row["email"]?></td>
		<td><?php echo"<a href='delete.php?email=$email'>Delete</a>";
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



