<link href="css\bootstrap.min.css"rel="stylesheet">

<?php
//session_start();
include_once("menu2.php");
$id=$_SESSION["UserId"];

$con=new mysqli("localhost","root","","auctionsystem");

if($con->errno)
{
	$con->errno;
	$con->error;
}
$query = "select * from uploadimage where email='$id'";

if($result = $con->query($query))
{
	/*fetch object array*/
	echo"<div class='container'>
	<div class='table table-responsive'>
	<table class='table table-hover table condensed'>
	<thead>
	<tr>
	<th>product_id</th>
	<th>product_name</th>
	<th>description</th>
	<th>email</th>
	<th>posteddate</th>
	<th></th>
	<th></th>

	</tr>
	</thead>";
	while ($row = $result->fetch_assoc()){
		
		$product_id=$row["productid"];

?>

<tbody>
		<tr>
		<td><?php echo$row["productid"]?></td>
		<td><?php echo $row["productname"]?></td>
		<td><?php echo$row["description"]?></td>
    	<td><?php echo$row["email"]?></td>
    	<td><?php echo$row["posteddate"]?></td>
		

		<td><?php echo'<img height="100px";width="100px"src="data:image/jpeg;base64,'.base64_encode($row['content']).'"/>';?></td>
		<td><?php echo"<a href='sdelete.php?productid=$product_id'>Delete</a>";?></td>
		
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



