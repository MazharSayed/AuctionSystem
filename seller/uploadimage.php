<?php
include_once("menu2.php");
?>
<html>
<head>

<link href="css\bootstrap.min.css"rel="stylesheet">
<style>
label{
	color:white;
}
</style>
</head>


<body>
<div class="container">
<form action="uploadfile.php" method="POST"enctype="multipart/form-data"class="form-horizontal">

<center><h1 style="background:teal;color:white;"><marquee style="width:500">Post Product</marquee> </h1></center>

<div class="form-group">
<label align="center"class="col-sm-4">Product_Name:</label>
<div class="col-sm-4">
<input class="form-control" type="text" name="productname">                         </div> 
</div>


<div class="form-group">
<label align="center"class="col-sm-4">Description:</label>
<div class="col-sm-4">
<textarea class="form-control" type="text" name="description"></textarea>                    
</div>
</div>


<div class="form-group">
<label align="center"class="col-sm-4">Posted by(email):</label>
<div class="col-sm-4">
<input class="form-control" type="email" name="email"> 
</div>
</div>


<div class="form-group">
<label align="center"class="col-sm-4">posted date :</label>
<div class="col-sm-4">
<input type="date" class="form-control"name="posteddate">
</div>
</div>



<input type="hidden"name="MAX_FILE_SIZE"value="2000000">

<div class="form-group">
<label class="col-sm-4"align="center">Select Product :</label>
<div class="col-sm-4">
<input align="center" name="userfile"type="file">
</div>

</div>
<div class="form-group">
<label class="col-sm-4"align="center">base amount :</label>
<div class="col-sm-4">
<input align="center" name="amount"type="text"class="form-control">
</div>
</div>

<div class="form-group">
<label class="col-sm-4"align="center">Contact:</label>
<div class="col-sm-4">
<input align="center" pattern="(7|8|9)\d{9}"name="contact"type="text"class="form-control">
</div>
</div>

<div class="form-group">
<label class="col-sm-4"></label>
<div class="col-sm-4">
<input  type="submit" class="form-control"name="upload" value="Upload"style="background:teal;color:white;">
</div>
</div>
</form>
</div>
</body>
</html>

