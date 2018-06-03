<html>
<head>

<link href="css\bootstrap.min.css"rel="stylesheet">

</head>


<body style="background:lightblue">
<div class="container">
<form action="uploadfile.php" method="POST"enctype="multipart/form-data"class="form_horizontal">
<div class="form-group">
<label class="col-sm-4"> product_id</label>
<div class="col-sm-4">
<input type="number"name="product_id"class="form-control">
</div>
</div>


<div class="form-group">
<label class="col-sm-4">email:</label>
<div class="col-sm-4">
<input type="email"name="email" class="form-control">
</div>
</div>
<input type="hidden"name="MAX_FILE_SIZE"value="2000000">
<input name="userfile"type="file">
<input name="upload"type="submit"class="box"id="upload"value="Upload">	


</form>
</div>
</body>


</html>