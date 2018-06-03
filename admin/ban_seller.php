
<style>
td{
	color:white;
}
th{
	color:white;
}

</style>
<link rel="stylesheet" href="css/bootstrap.css">
<?php
include_once("menu3.php");
$con=new mysqli("localhost","root","","auctionsystem");
if($con->errno)
{
	$con->errno;
	$con->error;
}
$query="SELECT * FROM seller";
//die($query); 
if($result= $con->query($query))
{
	echo"	<div class='container'>
	<div class='tabel-responsive'>
	<table class='table tabel-hover'>
<thead>	
<tr>

		 <th>firstname</th>
		 
		 <th>lastname</th>
		 <th>address</th>
		 <th>dob</th>
		 <th>gender</th>
		 <th>mobile_no</th>
		 <th>email</th>
		 <th>ban</th>
		 </tr>
		 </thead>";

	while($row=$result->fetch_assoc()){
		$email=$row["email"];
		?>
	 <tbody>
	 <tr>
	 <td><?php echo $row["fn"]?>
	 </td>
	 
	 <td><?php echo $row["ln"]?>
	 </td>
	 <td><?php echo $row["address"]?>
	 </td>
	 <td><?php echo $row["dob"]?>
	 </td>
	 <td><?php echo $row["gender"]?>
	 </td>
	 <td><?php echo $row["mob"]?>
	 </td>
	 <td><?php echo $row["email"]?>
	 </td>
	 <td><?php if($row["ban"]==true)
	 {
		 echo"user baned";
         echo"<a href='selleractive.php?email=".$row["email"]."'>Activate seller</a>";
 }
      else{
		  echo"Active User";
		  echo"<a href='sellerban.php?email=".$row["email"]."'>Ban seller</a>";
	  }?>
	  </td>
	 
	 
	 </tr>
</div>
<?php

	}

	$result->close();
}
else
{
	echo("eror".$con->error);
}	
	$con->close();
	?>