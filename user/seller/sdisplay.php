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
$query = "select * from seller where email='$id'";

if($result = $con->query($query))
{
	/*fetch object array*/
	echo"<div class='container'>
	";

	while ($row = $result->fetch_assoc()){
		
		$email=$row["email"];

?>
		<div class="row">
<label class="col-sm-5"style="color:white;">First name</label>
<label class="col-sm-5"style="color:white;">
<?php
echo $row["fn"]?></label>

</div>


<div class="row">
<label class="col-sm-5"style="color:white;">Last name</label>
<label class="col-sm-5"style="color:white;">
<?php
echo $row["ln"]?></label>
</div>


<div class="row">
<label class="col-sm-5"style="color:white;">address</label>
<label class="col-sm-5"style="color:white;">
<?php
echo $row["address"]?></label>
</div>


<div class="row">
<label class="col-sm-5"style="color:white;">Date_of_birth</label>
<label class="col-sm-5"style="color:white;">
<?php
echo $row["dob"]?></label>
</div>

<div class="row">
<label class="col-sm-5"style="color:white;">Gender</label>
<label class="col-sm-5"style="color:white;">
<?php
echo $row["gender"]?></label>
</div>

<div class="row">
<label class="col-sm-5"style="color:white;">Mobile_no</label>
<label class="col-sm-5"style="color:white;">
<?php

echo $row["mob"]?></label>
</div>


<div class="row">
<label class="col-sm-5"style="color:white;">Email</label>
<label class="col-sm-5"style="color:white;">
<?php
echo $row["email"]?></label>
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



