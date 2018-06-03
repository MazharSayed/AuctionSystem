<?php
session_start();
$_SESSION ["productid"]=$_GET["productid"];
$_SESSION["productby"]=$_GET["productby"];
//$bidby=$_SESSION["UserId"];


include("dbconfig.php");

if(!empty($_POST["submit"]))
{
$amount=$_POST["amount"];
$pid=$_SESSION ["productid"];
$ppb=$_SESSION["productby"];
$bidby=$_SESSION["UserId"];
$query="insert into biding(amount,productid,productby,bidby)values('$amount','$pid','$ppb','$bidby')";
$retval=$con->query($query) or Die("error".$con->error);
if($con->affected_rows>0)
{
	echo"bid submited successfully...";
	header("location:displaymybid.php?bidby=$bidby");
}
else
{
	echo"error while biding....";
}
	
}
else{

	

?>
<html>
<head>

<link href="css\bootstrap.min.css"rel="stylesheet">

</head>

<body>
<div class="container">
<form method="POST"class="form-horizontal">

<div class="form-group"><br><br>
<label class="col-sm-4"align="center">enter amount </label>
<div class="col-sm-4">
<input type="text" name="amount"class="form-control">
</div>
</div>
<div>
<label class="col-sm-4"></label>
<div class="col-sm-4">
<input type="submit" class="form-control" name="submit"value="submit"style="background:teal;color:white">
</div>
</div>
</form>
</div>
</body>

</html>

<?php
}
?>