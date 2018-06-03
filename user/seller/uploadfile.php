<?php
include("menu2.php");
if(isset($_POST['upload'])&&$_FILES['userfile']['size']>0)
{
	
	
	$fileName=$_FILES['userfile']['name'];
	$tmpName=$_FILES['userfile']['tmp_name'];
	$filesize=$_FILES['userfile']['size'];
	$fileType=$_FILES['userfile']['type'];

	$fp=fopen($tmpName,'r');
	$content=fread($fp,filesize($tmpName));
	$content=addslashes($content);
	fclose($fp);
	$product_id=$_POST["productid"];
	$product_name=$_POST["productname"];
	$description=$_POST["description"];
	$email=$_POST["email"];
	$posteddate=$_POST["posteddate"];
	$amount=$_POST["amount"];
	$contact=$_POST["contact"];
	if(!get_magic_quotes_gpc())
		
		{
			$fileName=addslashes($fileName);
			
		}
		$con=mysql_connect("localhost","root","","auctionsystem");
		mysql_select_db("auctionsystem");
		$query="insert into uploadimage(productid,productname,description,email,posteddate,amount,contact,name ,size,type,content)
		VALUES('$product_id','$product_name','$description','$email','$posteddate','$amount','$contact','$fileName','$filesize','$fileType','$content')";
		//die ($query);
		mysql_query($query)or die('error,query failed'.mysql_error());
		echo"<br>file $fileName uploaded<br>";
}
?>
