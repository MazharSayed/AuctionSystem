<link href="css\bootstrap.min.css"rel="stylesheet">

<?php
//session_start();
include_once("menu2.php");
//$id=$_SESSION["UserId"];

include("dbconfig.php");
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
	<th>product id </th>
	<th>product</th>
	<th>product_name</th>
	<th>description</th>
	<th>posteddate</th>
	<th>amount</th>
	<th>biding time remaining
	 <p id='demo'> </p>
	</th>
	</tr>
	</thead>";
	while ($row = $result->fetch_assoc()){
		
		$email=$row["email"];

?>

<tbody>
		<tr>
		<td><?php echo $row["productid"]?></td>
		<td><?php echo'<img height="100px";width="100px"src="data:image/jpeg;base64,'.base64_encode($row['content']).'"/>';?></td>
		<td><?php echo $row["productname"]?></td>
		<td><?php echo$row["description"]?></td>
    	<td><?php echo$row["posteddate"]?></td>
		<td><?php echo$row["amount"]?></td>
		<td><?php echo'<a href="biding.php?productid='.$row["productid"].' & productby='.$row["email"].'">Bid</a>';?>
<?php
			$qry="select max(amount) as amount from biding where productid='".$row["productid"]."'";
			$resu=$con->query($qry);
			if($resu->num_rows>0)
			{
				
				$ro=$resu->fetch_array();
				if($ro["amount"]!="")
				{
				echo'</br>Highest bid yet is</br> <b>'. $ro["amount"].' RS  </b> </td>' ;
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


<?php
date_default_timezone_set("Asia/Calcutta");
$c_date=date("M d, Y");
$c_date=$c_date." 24:00:00";
?>
<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo($c_date); ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML =  hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
		window.location = 'http://localhost:8003/update/os/user/bidallocation.php';
    }
}, 1000);
</script>




