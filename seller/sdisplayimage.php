<link href="css\bootstrap.min.css"rel="stylesheet">

<?php
//session_start();
include_once("menu2.php");
//$id=$_SESSION["UserId"];

$con=new mysqli("localhost","root","","auctionsystem");

if($con->errno)
{
	$con->errno;
	$con->error;
}
$query = "select * from uploadimage where sold=false";

if($result = $con->query($query))
{
	/*fetch object array*/
	echo"<div class='container'>
	<div class='table table-responsive'>
	<table class='table table-hover table condensed'>
	<thead>
	<tr>
	<th>product</th>
	<th>product_name</th>
	<th>description</th>
	<th>posteddate</th>
	<th>amount</th>
	<th>contact</th>
	<th>biding</th>
	</tr>
	</thead>";
	while ($row = $result->fetch_assoc()){
		
		$email=$row["email"];

?>

<tbody>
		<tr>
		<td><?php echo'<img height="100px";width="100px"src="data:image/jpeg;base64,'.base64_encode($row['content']).'"/>';?></td>
		<td><?php echo $row["productname"]?></td>
		<td><?php echo$row["description"]?></td>
    	<td><?php echo$row["posteddate"]?></td>
		<td><?php echo$row["amount"]?></td>
		<td><?php echo$row["contact"]?></td>
        <td><?php echo'<a href="biding.php?productid='.$row["productid"].' & productby='.$row["email"].'">Bid</a>';?>
<?php
			$qry="select max(amount) as amount from biding where productid='".$row["productid"]."'";
			$resu=$con->query($qry);
			if($resu->num_rows>0)
			{
				
				$ro=$resu->fetch_array();
				if($ro["amount"]!="")
				{
				echo'</br>Highest bid yet is</br> <b>'. $ro["amount"].' RS  </b> </td>';
				}
			
			else{
				echo'</br>No bid Yet! Become First to bid </td>'    ;
			}
			}
			?>
		
		
		
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



