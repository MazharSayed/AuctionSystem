
<html>
<head>

<link href="css\bootstrap.min.css"rel="stylesheet">

</head>
<body>
<div class="row">
<label class="col-sm-5">First name</label>
<label class="col-sm-5">
<?php
echo $row["fn"]?></label>

</div>


<div class="row">
<label class="col-sm-5">Last name</label>
<label class="col-sm-5">
<?php
echo $row["ln"]?></label>
</div>


<div class="row">
<label class="col-sm-5">address</label>
<label class="col-sm-5">
<?php
echo $row["address"]?></label>
</div>


<div class="row">
<label class="col-sm-5">Date_of_birth</label>
<label class="col-sm-5">
<?php
echo $row["dob"]?></label>
</div>

<div class="row">
<label class="col-sm-5">Gender</label>
<label class="col-sm-5">
<?php
echo $row["gender"]?></label>
</div>

<div class="row">
<label class="col-sm-5">Mobile_no</label>
<label class="col-sm-5">
<?php

echo $row["mob"]?></label>
</div>


<div class="row">
<label class="col-sm-5">Email</label>
<label class="col-sm-5">
<?php
echo $row["email"]?></label>
</div>


<div class="row">
<label class="col-sm-5">Password</label>
<label class="col-sm-5">
<?php
echo $row["pass"]?></label>
</div>
</body>
</html>