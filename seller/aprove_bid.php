<link href="css\bootstrap.min.css"rel="stylesheet">

<?php
session_start();
//include_once("menu.php");
$id=$_SESSION["UserId"];
//die($id);
include("dbconfig.php");

$query = "select * from uploadimage where email='$id' and sold=false";
//die($query);
if($result = $con->query($query))
{
	if($result->num_rows>0){
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
	<th>Aprove bid
	 
	</th>
	</tr>
	</thead>";
	while ($row = $result->fetch_assoc())
	{
		
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
<?php       $prod_id=$row["productid"];
			//$prod_id=$row["productid"];
			
			$qry="select bidby,max(amount) as amount from biding where productid='".$row["productid"]."'";
			//die($qry);
			$resu=$con->query($qry);
			if($resu->num_rows>0)
			{
				$ro=$resu->fetch_array();
				if($ro["amount"]!="")
				{
					$bidby=$ro["bidby"];
					
					$qrytgbider="select fn,ln from users where email='".$ro["bidby"]."'";
			//die($qrytgbider);
			$resutgbider=$con->query($qrytgbider);
			if($resutgbider->num_rows>0)
			{
				$r=$resutgbider->fetch_array();
				$fname=$r["fn"]." ".$r["ln"];
					die($fname);
					
				echo'</br>Hieghest bid by '. $fname.' and bid amount is</br> <b>'. $ro["amount"].' RS  </b> 
				<h5><a href="aprove.php?prod_id='.$prod_id.'&prod_by='.$email.'& bidby='.$bidby.'"> Aprove </a></h5>
				
				
				</td>' ;
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
				//die($fnameseller);		
				echo'</br>Hieghest bid by '. $fnameseller.' and bid amount is</br> <b>'. $ro["amount"].' RS  </b> 
				<h5><a href="aprove.php?prod_id='.$prod_id.'&prod_by='.$email.'& bidby='.$bidby.'"> Aprove </a></h5>';
				
					
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
	else{
		echo"There is no bid on your product";
	}
}
else
{
	echo("eror".$con->error);
}
/*close connection*/
$con->close();
?>


