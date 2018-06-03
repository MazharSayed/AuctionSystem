<link href="css\bootstrap.min.css"rel="stylesheet">

<?php
//session_start();
include_once("menu3.php");
//$id=$_SESSION["UserId"];

include("dbconfig.php");
if($con->errno)
{
	$con->errno;
	$con->error;
}
$query = "select * from uploadimage";

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
	<th>approved bid
	 <p id='demo'> </p>
	</th>
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
		<td>
<?php
			$qry="select bidby,max(amount) as amount from biding where productid='".$row["productid"]."'";
			$resu=$con->query($qry);
			if($resu->num_rows>0)
			{
				$ro=$resu->fetch_array();
				if($ro["amount"]!="")
				{
					
					$qrytgbider="select fn,ln from users where email='".$ro["bidby"]."'";
			$resutgbider=$con->query($qrytgbider);
			if($resutgbider->num_rows>0)
			{
				$r=$resutgbider->fetch_array();
				$fname=$r["fn"]." ".$r["ln"];
					
					
				echo'</br>Product Goes to '. $fname.' and bid amount is</br> <b>'. $ro["amount"].' RS  </b> </td>' ;
				}
				else
				{
					$qrytgbiderseller="select fn,ln from seller where email='".$ro["bidby"]."'";
			//die($qrytgbiderseller);
			$resutgbiderseller=$con->query($qrytgbiderseller);
			if($resutgbiderseller->num_rows>0)
			{
				$rseller=$resutgbiderseller->fetch_array();
				$fnameseller=$rseller["fn"]." ".$rseller["ln"];
		  
		  echo'</br>Product Goes to '. $fnameseller.' and bid amount is</br> <b>'. $ro["amount"].' RS  </b> </td>' ;
			
				}
			
			
			}
				}
			else{
				echo'</br>No bid Yet! Become First to bid  </td>'    ;
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


